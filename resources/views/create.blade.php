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
    <title>Add Movie</title>
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
            margin-left:24rem;
            margin-top:6rem;
        }
        .form-container form {
            width: 27.1rem;
            height: 35rem;
            border-radius: 1rem;
            background-color: #ffffffa5;
            padding: 2rem;
        }
        .form-container form h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-left:6rem;
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
            padding: 1rem 1.4rem;
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
    </style>
</head>
<body>

<div class="main-section">
    @include('adminNavbar') <!-- Optional: Include Admin Navbar -->
    <div class="form-container">
        <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Add Movie</h3>

            <label for="name">Movie Name:</label>
            <input type="text" name="name" class="box" required>

            <label for="description">Description:</label>
            <textarea name="description" class="box" required></textarea>

            <label for="age">Age Restriction:</label>
            <input type="number" name="age" class="box" required>

            <label for="image">Movie Poster:</label>
            <input type="file" name="image" class="box">

            <button type="submit" class="btn">Add Movie</button>
        </form>
    </div>
</div>

</body>
</html>
