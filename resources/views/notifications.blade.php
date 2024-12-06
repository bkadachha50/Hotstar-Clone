<!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="{{ asset('\style.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .rmv{
            color: white;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 0px 2px;
            border-radius: 4px;
            transition-duration: 0.4s;
        }
        .cards:hover .card-img {
            filter: blur(5px); /* Add blur effect to the image */
        }
        .time-ago{
            color: white;
        }
        
    </style>
</head>
<body>
<div class="main-section" style="background-color:#0f1014;">
    @include('Navbar')

    <div class="content-section">
        <div class="movies-section" style="height:100vh; padding-top:20vh;">
            <h3 class="Title2">Your Notifications</h3>
            <div class="watchlist-list">
                <div class="scroller-in">
                    @foreach($notifications as $notification)
                        <div class="cards">
                           
                                <img src="{{ asset('images/Movies/' . $notification->image) }}" alt="{{ $notification->title }}" class="card-img">
                         
                            <div class="card-body">
                                <h2 class="name">{{ $notification->title }}</h2>
                                <h6 class="des">{{ $notification->description }}</h6>
                                <p class="time-ago">{{ $notification->created_at->diffForHumans() }}</p>
                                <form action="{{ route('notification.delete', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="watchlist-btn rmv">Remove Notification</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('Footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
