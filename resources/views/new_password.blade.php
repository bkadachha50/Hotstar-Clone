<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trade+Winds%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nobile%3A400"/>
    <link rel="stylesheet" href="new_password.css">
    <style>
      body{
         background-color: #0f1014;
      }
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}

.container
{
    height: 100vh;
    width: 100vw;
}

.container>img{
    height: 100vh;
    width: 100vw;
    z-index: -1;
    position: absolute;
}

.nav-section{
    width: 12vw;
    height: 100%;
    position: absolute;
    z-index: 999;
 }
 
  
 .logo{
    display: flex;
    flex-direction: column;
    margin-top: 4vh;
    margin-left: 2.5vw;
 }
  
 .logo img{
    width: 3.5vw;
    height: 2.7vw;
    border-radius: 0px;
    
 }
  
 .logo button{
    width: 6vw;
    height: 1.5vw;
    border: none;
    border-radius: 1vw;
    margin-top: 1.5vh;
    font-size: 0.85vw;
    background-color: #262D3F; 
    color: rgb(255, 255, 255);
    cursor: pointer;
    margin-left: -1.2vw;
    padding-bottom: 0.5vh;
 }
  
 .logo button a{
    text-decoration: none;
    color: #ffffff;
 }
  
 .menu{
    height: 50vh;
    display: flex;
    flex-direction: column;
    margin-top: 20vh;
    margin-left: 1vw;
 }
  
 .menu ul{
    list-style: none;
    font-size: 1.3vw;
    margin-left: -1vw;
 }
  
 .menu ul li p{
  position: absolute;
  white-space: nowrap;
  margin-top: -4.8vw; 
  margin-left: 6vw;
  visibility: hidden;
  opacity: 0;
  color: #FFF;
 }
 .menu ul li i{
    margin-bottom: 7vh;
    opacity: 0.8;
    margin-left: 3.7vw;
    color: #FFF; 
    transition: all linear 0.1s;
 }
  
 .menu ul li i:hover{
    opacity: 1;
    font-size: 1.4vw;
 }
 
.container-fluid{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}


.container-fluid h2{
    margin-left: 8vw;
    margin-bottom: 3vw;
}

.container-fluid form{
    width: 32rem;
    height: 26vw;
    border-radius: 1rem;
    background-color:  #ffffffa5;
    padding:2rem;
    margin-top: 2vw;
}


.container-fluid form .box{
    width: 95%;
    border-radius: .5rem;
    padding:1rem 1rem;
    font-size: 1.1rem;
    border: none;
    color: black;
    background-color: WHITE;
    margin:1rem 0;
    height: 2.8vw;
    font-family: Nobile, 'Source Sans Pro';
 }

 .form-group label{
    font-size: 1.3rem;
    color: black;
    padding:1rem 0;
    margin-top: 1vw;
    margin-left: 0.1vw;
 }

 .btn{
   display: block;
   width: 30%;
   background-color: #262D3F;
   border-radius: .5rem;
   color:white;
   font-size: 1rem;
   cursor: pointer;
   text-transform: capitalize;
   text-align: center;
   margin-top: 1rem;
   height: 3vw;
   border: none;
   margin-top: 2vw;
}
   </style>
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
<form action="{{ route('update_password') }}" method="post">
   @csrf
    <h2>Reset Password</h2>
    <input type="hidden" name="email" value="{{ session('email') }}" />
    <div class="form-group">
        <label for="password">New Password:</label>
        <input type="password" class="form-control box" id="pwd" name="password" required>
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" class="form-control box" name="password_confirmation" id="repwd" required>
    </div>
    <input type="submit" class="btn" value="Submit">
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
</script>
</html>