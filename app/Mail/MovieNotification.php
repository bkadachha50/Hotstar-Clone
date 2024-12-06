<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Movie;

class MovieNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function build()
    {
        return $this->subject('New Movie Added: ' . $this->movie->name)
                    ->view('emails.movieNotification');
    }
}
