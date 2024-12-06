<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">
    <title>Edit User</title>
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
            margin-left:19vw;
            justify-content: center;
            padding: 2rem;
            margin-top: 6rem;
        }

        .form-container form {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            width: 600px;
            border-radius: 1rem;
            background-color: #ffffffa5;
            padding: 2rem;
        }

        .form-container form h3 {
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-family: 'Trade Winds', sans-serif;
            color: #1e1e1e;
            letter-spacing: 0.2rem;
            margin-bottom: 7vw;
            text-transform: uppercase;
        }

        .column {
            flex: 1;
            min-width: 250px;
        }

        .form-container form label {
            color: #262D3F;
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
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
            width: 100%;
            height: 3.4vw;
            border-radius: .5rem;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            padding: 0.8rem 1.5rem;
            text-transform: capitalize;
            background-color: #131f2f;
        }

        .form-container form button:hover {
            background-color: white;
            color: black;
        }

        .form-container form img {
           position: absolute;
           margin-top: 3rem;
           width: 100px;
           height: 100px;
           object-fit:cover;
           margin-left:14vw;
           border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="main-section">
    @include('adminNavbar')
    <div class="form-container">
        <form method="POST" action="{{ route('update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <h3>Edit User</h3>
            @if ($user->image)
                    <img src="{{ asset('User_profiles/' . $user->image) }}" alt="{{ $user->name }}" class="img">
            @endif
            <div class="column">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="box" value="{{ $user->name }}" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="box" value="{{ $user->email }}" required>

                <label for="status">Status</label>
                <input type="text" id="status" name="status" class="box" value="{{ $user->status }}" required>
            </div>

            <div class="column">
                <label for="role">Role</label>
                <input type="text" id="role" name="role" class="box" value="{{ $user->role }}" required>

                <label for="password">New Password</label>
                <input type="password" id="password" name="password" class="box">

                <label for="image">Profile Image</label>
                <input type="file" id="image" name="image" class="box">
            </div>
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>
</div>

</body>
</html>
