<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kid Mode</title>
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="{{ asset('\style.css') }}"/>
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
  </head>
  <body>
    <div class="main-section">
    @include('Navbar')
      <div class="content-section">
      @foreach($headers as $header)
        <div class="section-1">
            <div class="linear">
                <img src="{{ asset('Images/Logo-Background/kid.webp') }}" alt="Logo"> <!-- Optional logo -->
            </div>
            <div class="bg-image" style="background-image: url('{{ asset($header->background_image) }}');"></div>
            <div class="nav-image"></div>
            <div class="description" style="margin-left:14vw;">
                <h1 class="x1"><span>SHINCHAN</span></h1>
                <h4 class="x2">2024 • 4 Seasons • 3 Languages • U/A 7+</h4>
                <br>
                <p class="main">Shinchan returns with his hilarious and witty antics
                    alongside his family, pet dog shiro, neighbours and friends.
                </p>
                <br>
                <h4 class="Type">Comedy | Kids | Animation | Anime </h4>
                <br>
                <button id="btn">Add to Watchlist</button>
                <button id="btn2"><i class="fa-solid fa-plus"></i> </button>
            </div>
        </div>
    @endforeach
    <div class="movies-section" style="height:80vw">

     <h3 class="Title">Popular</h3>
    
     <div class="latest-release">
     <div class="scroller-in">
     @php
        $firstColumnMovies = $movie->slice(0, 7); 
        $secondColumnMovies = $movie->slice(7, 7); 
        $thirdColumnMovies = $movie->slice(14, 7);
        $fourthColumnMovies = $movie->slice(21, 7);
     @endphp
     @foreach($firstColumnMovies as $movie)
    <div class="cards">
    <img src="{{ asset('images/Movies/' . $movie->image) }}" alt="{{ $movie->name }}" class="card-img">
    <div class="card-body">
        <h2 class="name">{{ $movie->name }}</h2>
        <h6 class="des">{{ $movie->description }}</h6>
        <form action="{{ route('watchlist.add') }}" method="POST">
            @csrf
            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
            <button type="submit" class="watchlist-btn">Add to Watchlist</button>
        </form>
    </div>
</div>
        @endforeach
      </div> 
     </div>
   

     <h3 class="Title2">Top Suggested</h3>
<div class="latest-release">
    <div class="scroller-in">
        @foreach($secondColumnMovies as $movie)
        <div class="cards">
            <img src="{{ asset('images/Movies/' . $movie->image) }}" alt="{{ $movie->name }}" class="card-img">
            <div class="card-body">
                <h2 class="name">{{ $movie->name }}</h2>
                <h6 class="des">{{ $movie->description }}</h6>

                <!-- Add to Watchlist Form -->
                <form action="{{ route('watchlist.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                    <button type="submit" class="watchlist-btn">Add to Watchlist</button>
                </form>

  
                <form action="{{ route('review.add', ['movie_id' => $movie->id]) }}" method="GET">
                    <button type="submit" class="review-btn watchlist-btn">Review & Rating</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>


  <h3 class="Title2">Upcoming Movies</h3>

    <div class="latest-release">
    <div class="scroller-in">
    @foreach($thirdColumnMovies as $movie)
    <div class="cards">
    <img src="{{ asset('images/Movies/' . $movie->image) }}" alt="{{ $movie->name }}" class="card-img">
    <div class="card-body">
        <h2 class="name">{{ $movie->name }}</h2>
        <h6 class="des">{{ $movie->description }}</h6>
        
    
        <form action="{{ route('watchlist.add') }}" method="POST">
            @csrf
            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
            <button type="submit" class="watchlist-btn">Add to Watchlist</button>
        </form>
    </div>
</div>

        @endforeach
  </div>
 </div>

  </div>
  @include('Footer')
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js" integrity="sha512-wK2NuxEyN/6s53M8G7c6cRUXvkeV8Uh5duYS06pAdLq4ukc72errSIyyGQGYtzWEzvVGzGSWg8l79e0VkTJYPw==" crossorigin="anonymous"></script>
    <script src="{{ asset('\script.js') }}"></script>
  </body>
</html>