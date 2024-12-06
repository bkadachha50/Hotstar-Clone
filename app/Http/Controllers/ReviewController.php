<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create($movie_id)
    {
        $movie = Movie::findOrFail($movie_id);
        return view('reviews.create', compact('movie'));
    }

    public function store(Request $request)
{
    $request->validate([
        'movie_id' => 'required|exists:movies,id',
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string|max:1000',
    ]);

    Review::create([
        'movie_id' => $request->movie_id,
        'user_id' => auth()->id(),
        'rating' => $request->rating,
        'review' => $request->review,
    ]);

    return redirect()->route('index')->with('success', 'Your review has been submitted.');
}


}
