<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcription</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <link rel="stylesheet" href="{{ asset('css\subcription.css') }}"/>
</head>
<body>
    <div class="main-section">
    <img src="{{ asset('images/Logo-Background/hotstar-blue-bg.jpg') }}">
        <div class="nav-section" onmouseover = "right()">
            <nav>
              <div class="logo">
              <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;">         
              </div>
              <div class="menu" onmouseover = "show()" onmouseleave = "left()">
                <ul>
                  <li><a  href="{{ route('my_space') }}"> <i class="fa-solid fa-user"></i> <p class="p1">My Space</p> </a> </li>
                  <li><a  href="{{ route('search') }}"> <i class="fa-solid fa-magnifying-glass"></i> <p class="p1">Search</p> </a> </li>
                  <li><a  href="{{ route('index') }}"> <i class="fa-solid fa-house"></i> <p class="p1"> Home</p> </a> </li>
                  <li><a  href="{{ route('movies') }}"> <i class="fa-solid fa-clapperboard"></i> <p class="p1">Movies</p> </a> </li>
                  <li><a  href="{{ route('sports') }}"> <i class="fa-solid fa-volleyball"></i><p class="p1">Sports</p> </a> </li>
                  <li><a  href="{{ route('categories') }}"> <i class="fa-solid fa-layer-group"></i> <p class="p1">Categories</p> </a> </li>
                </ul>
              </div>
            </nav>
          </div>  
          <div class="subcription-section">
    @foreach ($subscription as $subscription)
        <div class="basic">
            <div>
                <h3>{{ $subscription->name }}</h3>
                <h5>{{ $subscription->resolution }}</h5>
            </div>
            <h5>Monthly Price: <p>₹{{ $subscription->price }}</p></h5>
            <h5>Access: <p>{{ $subscription->access }}</p></h5>
            <h5>Supported Devices: <p>{{ $subscription->devices }}</p></h5>
            <h5>Resolution: <p>{{ $subscription->resolution }}</p></h5>
            <h5>Video & Sound Quality: <p>{{ $subscription->video_sound_quality }}</p></h5>
            <form id="razorpay-payment-form" method="POST" action="{{ route('payment') }}">
            @csrf
                <input type="hidden" name="sub" value="{{ $subscription->id }}">
                <button type="submit" class="update">Pay Now</button>
            </form>



        </div>
    @endforeach
</div>

    </div>
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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    // This script handles the order creation and Razorpay checkout
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();

        var form = event.target;
        var amount = form.querySelector('input[name="sub"]').value;

        // Create an order via your server
        fetch('{{ route('verify.payment') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ sub: amount })
        })
        .then(response => response.json())
        .then(order => {
            var options = {
                key: '{{ env('RAZORPAY_KEY_ID') }}',
                order_id: order.id,
                handler: function(response) {
                    // Send the payment details back to your server to verify the payment
                    fetch('{{ route('verify.payment') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify(response)
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert('Payment successful!');
                        } else {
                            alert('Payment verification failed.');
                        }
                    });
                },
                theme: {
                    color: '#F37254'
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    });
</script>   
</body>
</html>