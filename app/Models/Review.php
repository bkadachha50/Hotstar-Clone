<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'user_id', 'review', 'rating'];

    // Review belongs to a movie
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    // Review belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
