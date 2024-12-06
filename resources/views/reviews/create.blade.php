<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review & Rating</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f1014;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
    

        .movie-card {
            margin-left:36vw;
            margin-top: 5vw;
            height: 36vw;
            width: 30vw;
            background-color: #1c1e24;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .movie-card img {
            width: 5vw;
            border-radius: 10px;
        }

        .movie-card h3 {
            font-size: 1rem;
            margin-top: 15px;
            color: #ffcc00;
        }

        .movie-card p {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .review-form {
            margin-top: 20px;
        }

        .review-form label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .review-form select,
        .review-form textarea,
        .review-form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        .review-form textarea {
            resize: none;
        }

        .review-form button {
            background-color: #ffcc00;
            color: #000;
            font-weight: bold;
            cursor: pointer;
        }

        .review-form button:hover {
            background-color: #e0b800;
        }
    </style>
</head>
<body>
    <div class="main-section">
        @include('Navbar')

        <div class="movie-card">
            <img src="{{ asset('images/Movies/' . $movie->image) }}" alt="{{ $movie->name }}">
            <h3>Review & Rating for {{ $movie->name }}</h3>
            <p>{{ $movie->description }}</p>

            <form class="review-form" action="{{ route('review.store') }}" method="POST">
                @csrf
                <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                
                <label for="rating">Rating:</label>
                <select name="rating" id="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <label for="review">Your Review:</label>
                <textarea name="review" id="review" rows="4" required></textarea>

                <button type="submit" class="submit-btn">Submit Review</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
