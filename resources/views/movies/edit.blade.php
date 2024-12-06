<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">
    <title>Edit Movie</title>
    <style>
        * {
            font-family: 'Nunito', sans-serif;
            margin: 0; 
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }
        .form-container {
            display: flex;
            padding: 2rem;
            margin-left: 24rem;
            margin-top: 4rem;
        }
        .form-container form {
            width: 27.1rem;
            height: 38rem;
            border-radius: 1rem;
            background-color: #ffffffa5;
            padding: 2rem;
        }
        .form-container form h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-left: 6rem;
            margin-bottom: 1.5rem;
            font-family: 'Trade Winds', sans-serif;
            color: #1e1e1e;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
        }
        .form-container form label {
            color: #262D3F;
            font-weight: 600;
        }
        .form-container form .box {
            width: 100%;
            border-radius: .5rem;
            padding: 0.8rem 0.5rem;
            color: #262D3F;
            margin: 0.6rem 0;
            background-color: white;
        }
        .form-container form button {
            display: block;
            width: 80%;
            border-radius: .5rem;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            padding: 0rem 3rem;
            text-transform: capitalize;
            text-align: center;
            height: 2.5vw;
            margin-top: 1rem;
            margin-left: 2.5vw;
            background-color: #131f2f;
        }
        .form-container form button:hover {
            background-color: white;
            color: black;
        }
        .form-container form img {
            display: block;
            margin-top: 1rem;
            width: 50px;
        }
    </style>
</head>
<body>

<div class="main-section">
    @include('adminNavbar') <!-- Optional: Include Admin Navbar -->
    <div class="form-container">
        <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <h3>Edit Movie</h3>

            <label for="name">Movie Name</label>
            <input type="text" name="name" id="name" value="{{ $movie->name }}" class="box" required>

            <label for="description">Description</label>
            <textarea name="description" id="description" rows="1" class="box" required>{{ $movie->description }}</textarea>

            <label for="age">Age Restriction:</label>
            <input type="number" name="age" id="age" value="{{ $movie->age }}" class="box" required min="0">


            <label for="image">Movie Poster</label>
            @if ($movie->image)
                <img src="{{ asset('images/Movies/' . $movie->image) }}" alt="{{ $movie->name }}">
            @endif
            <input type="file" name="image" id="image" class="box">

            <button type="submit" class="btn">Update Movie</button>
        </form>
    </div>
</div>

</body>
</html>
