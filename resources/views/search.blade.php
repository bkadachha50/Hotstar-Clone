<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Search</title>
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="{{ asset('css\search.css') }}"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
    />
    <link
            rel="stylesheet"
            href="https://gistcdn.githack.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="main-section">
    @include('Navbar')
    <div class="content-section">
        <div class="movies-section">
        <form method="get" action="{{ route('search') }}">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="search" placeholder="Movies, Shows and more" id="input" value="{{ request()->input('search') }}">
                <input type="submit" style="display: none"/>
            </div>
        </form>
        <div class="latest-release">
        <div class="movies-container">
    
    @if ($movies->isNotEmpty())
        @foreach ($movies as $movie)
            <div class="cards">
                <img src="{{ asset('images/Movies/' . $movie->image) }}" alt="{{ $movie->name }}" class="card-img">
                <div class="card-body">
                    <h2 class="name">{{ $movie->name }}</h2>
                    <h6 class="des">{{ $movie->description }}</h6>
                    <button class="watchlist-btn">Add to Watchlist</button>
                </div>
            </div>
        @endforeach
    @else
        <h1 class="no_data">Movies not found</h1>
    @endif
</div>


    </div>   
    </div>
</div>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"
        integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"
        integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('\script.js') }}"></script>
</body>
</html>
