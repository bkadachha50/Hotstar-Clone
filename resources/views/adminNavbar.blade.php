<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css\content.css') }}">
</head>
<body>
<div class="nav-section">
            <div class="logo">
                <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;margin-left: -2.2vw; height:3.3vw; width:4.5vw">         
            </div>
            <div class="menu">
                <div class="dashboard">
                    <i class="ri-dashboard-fill"></i>
                    <h4><a href="{{ route('admin') }}">Dashboard</a></h4>
                </div>
                <hr>
                <div class="user">
                    <i class="fa-solid fa-user"></i>
                    <h4><a href="{{ route('user') }}">Users</a></h4>
                </div>
                <div class="content">
                    <i class="fa-solid fa-clapperboard"></i>    
                    <h4><a href="{{ route('content') }}">Content</a></h4>
                </div>
                <div class="payments">
                    <i class="fa-solid fa-credit-card"></i>
                    <h4><a href="{{ route('subcribe') }}">Subcription</a></h4>
                </div>
            </div>

            <div class="admin">
                <div class="admin-1">
                <img src="{{ Auth::user()->image ? asset('User_profiles/' . Auth::user()->image) : asset('User_profiles/default.webp') }}" alt="profile image"/>
                    <h4>{{ Auth::user()->name }}<p class="ad">Admin</p></h4>
                </div>
                <hr>
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
</body>
</html>