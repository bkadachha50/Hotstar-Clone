<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie</title>
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="{{ asset('css\movies.css') }}" />
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
        <div class="section-1">
            <div class="linear"></div>
            <div class="bg-image"></div>
            <div class="nav-image"></div>
            <div class="description">
                <h1 class="x1"> DEEP RISING  </h1>
                <h4 class="x2"> 2017 • 2h 28m • 5 Languages • U/A 16+ </h4> <br>
                <p  class="main"> Poseidon is the god of the sea and waters, as well as of horses and earthquakes. This is why so many temples are dedicated to him both along the coasts and inland. On fountains Poseidon is often depicted as a formidable man with a wild beard, sometimes with his companions, the Tritons, which are fish with human torsos. </p> <br>
                <h4 class="Type"> Action | Fantasy | Horror | Advanture </h4> <br>
                <button id="btn"> <i class="fa-solid fa-play"></i> Watch for free </button>
                <button id="btn2"> <i class="fa-solid fa-plus"></i> </button>
            </div>
        </div>

    <div class="movies-section">

     <h3 class="Title">Latest Releases</h3>

    <div class="latest-release">
    <div class="scroller-in">
       <div class="cards">
                <img src="{{ asset('images\Movies\Movie1.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\leatest1.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\leatest2.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\leatest3.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\leatest4.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\leatest5.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\Movie-1.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
    </div>
    </div>

    <h3 class="Title2">Top Suggested</h3>

    <div class="latest-release">
    <div class="scroller-in">
            <div class="cards">
                <img src="{{ asset('images\Movies\suggest1.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\horror7.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\suggest3.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\suggest4.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\suggest5.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\suggest6.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\suggest7.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
    </div>
    </div>

  <h3 class="Title2">Upcoming Movies</h3>

  <div class="latest-release">
  <div class="scroller-in">
            <div class="cards">
                <img src="{{ asset('images\Movies\Movies-14.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\a.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\Movies-16.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\a1.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\Movies-18.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\Movies-19.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\Movies-20.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
    </div>
  </div>

  <h3 class="Title2">Horror Movies</h3>

  <div class="latest-release">
  <div class="scroller-in">
     <div class="cards">
                <img src="{{ asset('images\Movies\horror1.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
     </div>
     <div class="cards">
                <img src="{{ asset('images\Movies\horror2.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
     </div>
     <div class="cards">
                <img src="{{ asset('images\Movies\horror3.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
     </div>
     <div class="cards">
                <img src="{{ asset('images\Movies\horror4.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
     </div>
     <div class="cards">
                <img src="{{ asset('images\Movies\horror5.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
     </div>
     <div class="cards">
                <img src="{{ asset('images\Movies\horror6.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
     </div>
     <div class="cards">
                <img src="{{ asset('images\Movies\horror7.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
     </div>
  </div>
  </div>


  <h3 class="Title2">Comedy Movies</h3>

  <div class="latest-release">
  <div class="scroller-in">
          <div class="cards">
                <img src="{{ asset('images\Movies\comedy1.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\comedy7.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\comedy3.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\comedy4.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\comedy5.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\comedy6.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
            <div class="cards">
                <img src="{{ asset('images\Movies\comedy7.webp') }}" alt="" class="card-img">
                <div class="card-body">
                    <h2 class="name">name</h2>
                    <h6 class="des">description</h6>
                    <button class="watchlist-btn">add to watchlist</button>
                </div>
            </div>
  </div>
  </div>
  <!-- @include('Footer') -->
  
  </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('\script.js') }}"></script>
  </body>
</html>