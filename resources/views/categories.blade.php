<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="{{ asset('css\categories.css') }}" />
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

    <div class="movies-section">

     <h3 class="Title">Popular Languages</h3>

      <div class="latest-release Section1">

        <div class="scroller-in">

          <div class="cards">
            <img src="{{ asset('images\Movies\Hindi.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\Kannada.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\Korean.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\Japanese.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\Marathi.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\Tamil.webp') }}" alt="" class="card-img">
          </div>

          </div> 
        </div>


        <h3 class="Title2">Popular Channels</h3>

        <div class="latest-release">

          <div class="scroller-in">

          <div class="cards">
            <img src="{{ asset('images\Movies\chanal1.webp') }}" alt="" class="card-img">
          </div> 
          <div class="cards">
            <img src="{{ asset('images\Movies\chanal2.webp') }}" alt="" class="card-img">
          </div> 
          <div class="cards">
            <img src="{{ asset('images\Movies\chanal3.webp') }}" alt="" class="card-img">
          </div> 
          <div class="cards">
            <img src="{{ asset('images\Movies\chanal4.webp') }}" alt="" class="card-img">
          </div> 
          <div class="cards">
            <img src="{{ asset('images\Movies\chanal5.webp') }}" alt="" class="card-img">
          </div> 
          <div class="cards">
            <img src="{{ asset('images\Movies\chanal6.webp') }}" alt="" class="card-img">
          </div> 
          <div class="cards">
            <img src="{{ asset('images\Movies\chanal7.webp') }}" alt="" class="card-img">
          </div> 
            </div> 
          </div>


          <h3 class="Title2">Popular Genres</h3>

          <div class="latest-release">
  
            <div class="scroller-in">
  
          <div class="cards">
            <img src="{{ asset('images\Movies\action.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\horror.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\deama.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\crime.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\anime.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\kids.webp') }}" alt="" class="card-img">
          </div>

  
              </div> 
            </div>

            <h3 class="Title2">Popular Sports</h3>

            <div class="latest-release">
    
              <div class="scroller-in">
        
          <div class="cards">
            <img src="{{ asset('images\Movies\cricket.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\baseball.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\football.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\hokey.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\kabbadi.webp') }}" alt="" class="card-img">
          </div>
          <div class="cards">
            <img src="{{ asset('images\Movies\tennis.webp') }}" alt="" class="card-img">
          </div>
                
                </div> 
              </div>

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