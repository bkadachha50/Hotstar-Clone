<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sports</title>
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="{{ asset('css\sports.css') }}" />
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
                <h1 class="x1"> STEELERS BULLS </h1>
                <h4 class="x2"> Pro Kabaddi 2023 • 10m • Kabaddi  </h4> <br>
                <p  class="main"> Bengaluru Bulls ended their campaign on a positive note by cliching a victory against Harayana Steelers in Pro Kabbadi League S10. </p> <br>
              <br>
                <button id="btn"> <i class="fa-solid fa-play"></i> Watch for Free </button>
            </div>
        </div>

        <div class="movies-section">

          <h3 class="Title">Popular Kabaddi League</h3>
     
           <div class="latest-release Section1">
     
             <div class="scroller-in">
               <div class="cards">
                 <img src="{{ asset('images\Sports\f1.webp') }}" alt="" class="card-img">
               </div> 
               <div class="cards">
                 <img src="{{ asset('images\Sports\f7.webp') }}" alt="" class="card-img">
               </div> 
               <div class="cards">
                 <img src="{{ asset('images\Sports\f2.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\f3.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\f4.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\f5.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\f6.webp') }}" alt="" class="card-img">
               </div>

               </div> 
             </div>
     
     
             <h3 class="Title2">England Tour of India</h3>
     
             <div class="latest-release">
     
               <div class="scroller-in">

               <div class="cards">
                 <img src="{{ asset('images\Sports\c1.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\c2.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\c3.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\c4.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\c5.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\c6.webp') }}" alt="" class="card-img">
               </div>
          
                 </div> 
               </div>
     
     
               <h3 class="Title2">Follow The Blue Special</h3>
     
               <div class="latest-release">
       
                 <div class="scroller-in">

               <div class="cards">
                 <img src="{{ asset('images\Sports\b1.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\b2.webp') }}" alt="" class="card-img">
               </div>  
               <div class="cards">
                 <img src="{{ asset('images\Sports\b3.webp') }}" alt="" class="card-img">
               </div> 
               <div class="cards">
                 <img src="{{ asset('images\Sports\b4.webp') }}" alt="" class="card-img">
               </div> 
               <div class="cards">
                 <img src="{{ asset('images\Sports\b5.webp') }}" alt="" class="card-img">
               </div> 
               <div class="cards">
                 <img src="{{ asset('images\Sports\b6.webp') }}" alt="" class="card-img">
               </div> 
               <div class="cards">
                 <img src="{{ asset('images\Sports\b7.webp') }}" alt="" class="card-img">
               </div> 
                 
                   </div> 
                 </div>
   
                 <!-- <h3 class="Title2">PL Star Unplugged</h3>
     
                 <div class="latest-release">
         
                   <div class="scroller-in">
             
               <div class="cards">
                 <img src="{{ asset('images\Sports\p1.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\p2.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\p3.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\p4.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\p5.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\p6.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\p7.webp') }}" alt="" class="card-img">
               </div>
                 
                    
                     </div> 
                   </div> -->

                   <h3 class="Title2">Popular In Cricket</h3>
     
                   <div class="latest-release">
           
                     <div class="scroller-in">
               <div class="cards">
                 <img src="{{ asset('images\Sports\h1.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\h2.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\h3.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\h4.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\h5.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\h6.webp') }}" alt="" class="card-img">
               </div>
               <div class="cards">
                 <img src="{{ asset('images\Sports\h7.webp') }}" alt="" class="card-img">
               </div>
                       </div> 
                     </div>
     
         </div>     
  </div>
</div>
@include('Footer')
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('\script.js') }}"></script>
  </body>
</html>