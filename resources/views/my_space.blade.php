<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Space</title>
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="{{ asset('css/my_space.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://gistcdn.githack.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="main-section">
    @include('Navbar')
    <div class="content-section">
        <div class="movies-section">
            <div class="container">
                <div class="main-text">
                    <h4>Subscribe to enjoy Hotstar</h4>
                    <h4><i class="fa-regular fa-envelope"></i> &nbsp; {{ Auth::user()->email }}</h4>
                </div>
                <div class="plan">
                    <a href="{{ route('subcription') }}"><button>Subscribe</button></a>
                    <p>Plans start at ₹199</p>
                </div>
            </div>
            <hr class="d2">
            <h3>Profile</h3>
            <div class="contain">
            <div class="profile-section">
                <!-- Normal Mode Section -->
                <div class="profile-img">
                    <a href="{{ route('switchToNormalMode') }}" style="text-decoration:none">
                        <img src="{{ Auth::user()->image ? asset('User_profiles/' . Auth::user()->image) : asset('User_profiles/default.webp') }}" alt="profile image" style="object-fit:cover" />
                        <h4 style="color:white;">{{ Auth::user()->name }}</h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="contain" style="position: absolute; margin-left:11vw; margin-top:-13.3vw;">
            <div class="profile-section">
                <!-- Kid Mode Section -->
                <div class="profile-img">
                    <a href="{{ route('switchToKidMode') }}" style="text-decoration:none">
                        <img src="{{ asset('images/Logo-Background/kids.png') }}" alt="profile image" style="object-fit:cover" />
                        <h4 style="margin-left:2.5vw; color:white;">Kids</h4>
                    </a>
                </div>
            </div>
        </div>
            <div class="Edit_Profile">
                <i class="fa-solid fa-user-pen"></i>
                <h4><a href="{{ route('Edit_profile') }}">Edit Profile</a></h4>
            </div>
            <div class="logout">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="log">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <h4>Logout</h4>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>
