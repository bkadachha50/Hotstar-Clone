<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Movie;
use App\Models\Subscription;
use App\Models\Header; 
use App\Models\User;
use App\Models\Review;
use App\Mail\MovieNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\Notification; 
use Illuminate\Support\Facades\Auth;


class MovieController extends Controller
{
        public function create()
        {
            return view('create'); 
        }

        public function store(Request $request)
        {
    
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image',
                'age' => 'required|integer',
            ]);
        
            if ($request->hasFile('image')) {
                $imageName = $request->image->getClientOriginalName();
                $request->image->move(public_path('images/Movies'), $imageName);
            }
        
            $movie = Movie::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'image' => $imageName,
                'age' => $request->input('age'),
            ]);
        
            // Get all users
            $users = User::all();
        
            // Loop through each user and send email and store notification
            foreach ($users as $user) {
                // Send email notification
                Mail::to($user->email)->send(new MovieNotification($movie));
        
                // Create a notification in the database
                Notification::create([
                    'user_id' => $user->id,
                    'type' => 'movie', // Specify type as 'movie'
                    'title' => $movie->name,
                    'description' => $movie->description,
                    'image' => $movie->image,
                    'is_read' => false,
                ]);
            }
        
            return redirect()->back()->with('success', 'Movie added and notifications sent!');
        }
        

        
        public function index(Request $request)
        {
            // Fetch all movies with their reviews and users (aged 15 and above)
            $movie = Movie::with('reviews.user')->where('age', '>=', 15)->get();
        
            // Fetch all reviews from the database
            $reviews = Review::with('movie', 'user')->get();
        
            // Fetch all headers (if needed)
            $headers = Header::all();
        
            // Return the view with all data
            return view('index', compact('movie', 'headers', 'reviews'));
        }
        
        

        public function kid(Request $request)
        {
        
            $movie = Movie::where('age', '<=', 14)->get();
        
            $headers = Header::all();
        
            return view('kid', compact('movie', 'headers'));
        }
        
        
        

        public function content()
        {
            $movie = Movie::all();
            return view('content', compact('movie'));
        }
        public function admin()
        {
            $movie = Movie::all();
            $headers = Header::all();
            return view('admin', compact('movie','headers'));
        }
        public function hdestroy($id)
        {
            $headers = Header::find($id);
            $headers->delete();
            return redirect()->route('admin')->with('success', 'Show deleted successfully');
        }
        public function destroy($id)
        {
            $movie = Movie::findOrFail($id);
            $movie->delete();
            return redirect()->route('content')->with('success', 'Movie updated successfully!');
        }
        public function edit($id)
        {
            $movie = Movie::findOrFail($id);
            return view('movies.edit', compact('movie'));
        }
    
        public function update(Request $request, $id)
        {

            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:500',
                'image' => 'nullable|image',
                'age' => 'required|integer|min:0',
            ]);
    

            $movie = Movie::findOrFail($id);
    
    
            $movie->name = $request->input('name');
            $movie->description = $request->input('description');
            $movie->age = $request->input('age');

            if ($request->hasFile('image')) {
        
                $imagePath = public_path('images/Movies/' . $movie->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
    
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('images/Movies'), $imageName);
                $movie->image = $imageName;
            }
    
            $movie->save();
    
            return redirect()->route('content')->with('success', 'Movie updated successfully!');
        }

        public function search(Request $request)
{
    $query = $request->input('search');
    $mode = session('mode', 'normal'); // Default to 'normal' if mode is not set
    
    // Query the movies based on search input and mode
    $movies = Movie::where(function ($queryBuilder) use ($query) {
        $queryBuilder->where('name', 'LIKE', "%{$query}%")
                     ->orWhere('description', 'LIKE', "%{$query}%");
    })
    ->when($mode === 'kid', function ($queryBuilder) {
        // Only show movies for 15 and under in Kid Mode
        $queryBuilder->where('age', '<=', 15);
    })
    ->when($mode === 'normal', function ($queryBuilder) {
        // Only show movies for 15 and above in Normal Mode
        $queryBuilder->where('age', '>', 15);
    })
    ->get();
    
    return view('search', compact('movies', 'query', 'mode'));
}

        
        
        

        public function watchlist(){
            return view('watchlist');
        }
}
    