<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trade+Winds%3A400"/>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nobile%3A400"/>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <style>
      .error {
         color: red;
      }
      .dot {
         margin-top: 20px;
      }
   </style>
</head>
<body>
<div class="container">
<img src="{{ asset('images/Logo-Background/hotstar-blue-bg.jpg') }}">
<div class="nav-section" onmouseover="right()">
    <nav>
        <div class="logo">
        <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;margin-left: 0.4vw; height:3.3vw; width:4.5vw">         
        </div>
        <div class="menu" onmouseover="show()" onmouseleave="left()">
            <ul>
                <li><a href="#"> <i class="fa-solid fa-user"></i> <p class="p1">My Space</p> </a> </li>
                <li><a href="{{ route('search') }}"> <i class="fa-solid fa-magnifying-glass"></i> <p class="p1">Search</p> </a> </li>
                <li><a href="{{ route('index') }}"> <i class="fa-solid fa-house"></i> <p class="p1">Home</p> </a> </li>
                <li><a href="{{ route('movies') }}"> <i class="fa-solid fa-clapperboard"></i> <p class="p1">Movies</p> </a> </li>
                <li><a href="{{ route('sports') }}"> <i class="fa-solid fa-volleyball"></i><p class="p1">Sports</p> </a> </li>
                <li><a href="{{ route('categories') }}"> <i class="fa-solid fa-layer-group"></i> <p class="p1">Categories</p> </a> </li>
            </ul>
        </div>
    </nav>
</div>
<section class="form-container">
<form action="{{ route('login.submit') }}" method="post">
    @csrf
    <h3>Login Now</h3>
    <input type="text" id="email1" placeholder="Enter your email" class="box" name="email" value="{{ old('email') }}">
    @error('email')
     <span class="error">{{ $message }}</span>
    @enderror
    <input type="password" id="pwd1" placeholder="Enter your password" class="box" name="password">
    @error('password')
     <span class="error">{{ $message }}</span>
    @enderror
    <div class="dot">.</div> 
    <a id="fpwd" href="{{ route('forget_pass') }}">Forget password?</a>
    <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
    <input type="submit" id="submit1" value="Login Now" class="btn" name="submit">
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
