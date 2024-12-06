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
<img src="{{ asset('images\Logo-Background\hotstar-blue-bg.jpg') }}">
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
        <form action="{{ route('verify_otp') }}" method="post" id="form1" style="height:27vw">
    @csrf
    <h2>OTP Verification</h2>
    <div class="form-group">
        <label for="otp1">Enter OTP:</label>
        <input type="number" class="form-control box" id="otp1" name="otp" required>
        <span id="otp_err"></span>
        <div>OTP will expire in <span id="timer">01:00</span></div>
    </div>
    <input type="hidden" name="email" value="{{ session('email') }}" />
    <input type="submit" class="btn" value="Verify OTP" name="btn" />
    <a href="#"> <input type="button" class="btn" value="Resend OTP" name="resend_btn" id="r_btn" disabled /></a>
</form>

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
document.addEventListener("DOMContentLoaded", function() {
    var timerElement = document.getElementById('timer');
    var seconds = 60; // Timer duration in seconds (60 seconds for 1 minute)

    function updateTimer() {
        // Calculate minutes and seconds
        var minutes = Math.floor(seconds / 60);
        var secs = seconds % 60;

        // Format the time as mm:ss
        var formattedTime = 
            (minutes < 10 ? '0' : '') + minutes + ':' + 
            (secs < 10 ? '0' : '') + secs;

        // Display the formatted time in the timer span
        timerElement.textContent = formattedTime;

        // If time is still left, continue the countdown
        if (seconds > 0) {
            seconds--; // Decrease seconds
            setTimeout(updateTimer, 1000); // Call updateTimer every 1 second
        } else {
            // If time runs out, you can display a message or trigger some action
            timerElement.textContent = "Expired";
            // You can enable the "Resend OTP" button here if needed
            document.getElementById('r_btn').disabled = false; // Enable Resend OTP button
        }
    }

    updateTimer(); // Start the countdown
});

</script>
</html>