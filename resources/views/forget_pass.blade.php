<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trade+Winds%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nobile%3A400"/>
    <link rel="stylesheet" href="{{ asset('css\forget_pass.css') }}">
</head>
<body>
<div class="container">
<img src="{{ asset('images/Logo-Background/hotstar-blue-bg.jpg') }}">
<div class="nav-section" onmouseover = "right()">
        <nav>
          <div class="logo">
          <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;margin-left: 0.4vw; height:3.3vw; width:4.5vw">         
          </div>
          <div class="menu" onmouseover = "show()" onmouseleave = "left()">
            <ul>
              <li><a  href="#"> <i class="fa-solid fa-user"></i> <p class="p1">My Space</p> </a> </li>
              <li><a  href="Search.php"> <i class="fa-solid fa-magnifying-glass"></i> <p class="p1">Search</p> </a> </li>
              <li><a  href="index.php"> <i class="fa-solid fa-house"></i> <p class="p1"> Home</p> </a> </li>
              <li><a  href="Movies.php"> <i class="fa-solid fa-clapperboard"></i> <p class="p1">Movies</p> </a> </li>
              <li><a  href="Sports.php"> <i class="fa-solid fa-volleyball"></i><p class="p1">Sports</p> </a> </li>
              <li><a  href="Categories.php"> <i class="fa-solid fa-layer-group"></i> <p class="p1">Categories</p> </a> </li>
            </ul>
          </div>
        </nav>
      </div>
    <div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <form action="{{ route('forget_pass_otp') }}" method="post" id="form1">
              @csrf
             <h2>Forgot Password </h2>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control box" id="email1" placeholder="Enter email" name="email"><span id="em_err"></span>
                </div>
                <input type="submit" class="btn" value="Send OTP" name="btn" />
            </form>
        </div>
    </div>
</div>
</div>
</body>

<script>
var p1 = document.querySelectorAll(".p1");
var zoom = document.querySelectorAll("i");
var blur = document.querySelector(".nav-section");

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
</html>