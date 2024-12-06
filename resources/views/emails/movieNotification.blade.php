<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Movie Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background: #007bff;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .movie-img {
            text-align: center;
            margin: 20px 0;
        }
        .movie-img img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background: #f4f4f9;
            color: #555;
            padding: 15px;
            text-align: center;
            font-size: 0.9em;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎥 New Movie Alert!</h1>
        </div>
        <div class="content">
            <h2>{{ $movie->name }}</h2>
            <p>{{ $movie->description }}</p>
            <div class="movie-img">
            <p><strong>Don't miss out on this new addition to our collection. Start watching today!</strong></p>
            <p>
                <a href="{{ url('movies/' . $movie->id) }}" style="display: inline-block; padding: 10px 20px; background: #007bff; color: #ffffff; text-decoration: none; border-radius: 5px;">Watch Now</a>
            </p>
        </div>
        <div class="footer">
            <p>You received this email because you're subscribed to our movie updates.</p>
            <p><a href="{{ url('unsubscribe') }}">Unsubscribe</a> | <a href="{{ url('/') }}">Visit Website</a></p>
        </div>
    </div>
</body>
</html>
