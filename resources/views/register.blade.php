<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trade+Winds%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nobile%3A400"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="{{ asset('images/Logo-Background/hotstar-blue-bg.jpg') }}">
    <div class="nav-section">
        <nav>
            <div class="logo">
            <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;margin-left: 0.4vw; height:3.3vw; width:4.5vw">         
    </div>
            <div class="menu">
                <ul>
                    <li><a href="#"> <i class="fa-solid fa-user"></i> <p class="p1">My Space</p> </a> </li>
                    <li><a href="{{ route('search') }}"> <i class="fa-solid fa-magnifying-glass"></i> <p class="p1">Search</p> </a> </li>
                    <li><a href="{{ route('index') }}"> <i class="fa-solid fa-house"></i> <p class="p1">Home</p> </a> </li>
                    <li><a href="{{ route('movies') }}"> <i class="fa-solid fa-clapperboard"></i> <p class="p1">Movies</p> </a> </li>
                    <li><a href="{{ route('sports') }}"> <i class="fa-solid fa-volleyball"></i> <p class="p1">Sports</p> </a> </li>
                    <li><a href="{{ route('categories') }}"> <i class="fa-solid fa-layer-group"></i> <p class="p1">Categories</p> </a> </li>
                </ul>
            </div>
        </nav>
    </div>

    <section class="form-container">
        <form action="{{ URL::to('/') }}/register_action" method="post" enctype="multipart/form-data" id="reg">
            @csrf
            <h3>Sign Up</h3>

            <!-- Full Name Input -->
            <input type="text" placeholder="Full name" id="fn1" class="box" name="name" value="{{ old('name') }}">
            @error('name')
            <span class="error">{{ $message }}</span>
            @enderror

            <!-- Email Input -->
            <input type="email" placeholder="Email" id="email1" class="box" name="email" value="{{ old('email') }}">
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror

            <!-- Password Input -->
            <input type="password" placeholder="Password" id="pwd1" class="box" name="password">
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror

            <!-- Confirm Password Input -->
            <input type="password" placeholder="Confirm password" id="repwd1" class="box" name="password_confirmation">
            @error('password_confirmation')
            <span class="error">{{ $message }}</span>
            @enderror

            <!-- Image Upload -->
            <input type="file" name="image" class="box">
            @error('image')
            <span class="error">{{ $message }}</span>
            @enderror

            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            <input type="submit" id="submit1" value="Sign up" class="btn" name="submit">
        </form>
    </section>
</div>

<script>
    var p1 = document.querySelectorAll(".p1");

    function show() {
        p1.forEach(p1 => {
            p1.style.opacity = "1";
            p1.style.visibility = "visible";
            p1.style.transition = "all linear 2s";
        });
    };

    function left() {
        p1.forEach(p1 => {
            p1.style.opacity = "0";
            p1.style.visibility = "hidden";
            p1.style.transition = "all linear 0.5s";
        });
    };
</script>
</body>
</html>
