<?php
namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function addToWatchlist(Request $request)
    {
        $user = Auth::user();

        $exists = Watchlist::where('user_id', $user->id)
                           ->where('movie_id', $request->movie_id)
                           ->exists();

        if (!$exists) {
            Watchlist::create([
                'user_id' => $user->id,
                'movie_id' => $request->movie_id,
            ]);

            return redirect()->back()->with('success', 'Movie added to your watchlist!');
        }

        return redirect()->back()->with('error', 'Movie is already in your watchlist.');
    }
    public function watchlist()
    {
        $user = Auth::user();
        $mode = session('mode', 'normal'); // Default to 'normal' if mode is not set
    
        // Get the user's watchlist
        $watchlistQuery = Watchlist::where('user_id', $user->id)
                                   ->with('movie'); // Assuming the watchlist has a relation to the movie
    
        // If in Kid Mode, filter watchlist to show only movies suitable for kids
        if ($mode === 'kid') {
            $watchlistQuery->whereHas('movie', function($query) {
                $query->where('age', '<=', 15); // Show only movies with age <= 15
            });
        }
        else{
            $watchlistQuery->whereHas('movie', function($query) {
                $query->where('age', '>=', 15); // Show only movies with age <= 15
            });
        }
    
        // Get the results
        $watchlist = $watchlistQuery->get();
    
        return view('watchlist', compact('watchlist'));
    }
    
public function deleteFromWatchlist(Request $request)
{
    $user = Auth::user();

    $watchlistEntry = Watchlist::where('user_id', $user->id)
                                ->where('movie_id', $request->movie_id)
                                ->first();

    if ($watchlistEntry) {
        $watchlistEntry->delete(); // Delete the entry

        return redirect()->back()->with('success', 'Movie removed from your watchlist!');
    }

    return redirect()->back()->with('error', 'Movie not found in your watchlist.');
}

}
