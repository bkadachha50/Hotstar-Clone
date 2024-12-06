<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/subcription.css') }}">
    <style>
        .payment-card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    width: 90%;
    height: auto; /* Adjust height dynamically */
    position: absolute;
    top: 50%; /* Center the card vertically */
    left: 50%; /* Center the card horizontally */
    transform: translate(-50%, -50%);
}

.payment-card h2 {
    color: #333;
    font-size: 1.5rem;
    margin-bottom: 15px;
    text-align: center;
}

.payment-card p {
    color: #000;
    font-size: 1rem;
    margin-bottom: 10px;
    font-weight: bold;
}

#razorpay-payment-form {
    margin-top: 20px;
    text-align: center;
}

.razorpay-btn script {
    border: none;
    padding: 10px 20px;
    background-color: #F37254;
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    display: inline-block;
}

    </style>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <div class="main-section">
        <img src="{{ asset('images/Logo-Background/hotstar-blue-bg.jpg') }}" alt="Background" class="img-fluid">
        
        <div class="nav-section">
            <nav>
                <div class="logo">
                <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;margin-left: 0.4vw; height:3.3vw; width:4.5vw">         
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="{{ route('my_space') }}"><i class="fa-solid fa-user"></i><p class="p1">My Space</p></a></li>
                        <li><a href="{{ route('search') }}"><i class="fa-solid fa-magnifying-glass"></i><p class="p1">Search</p></a></li>
                        <li><a href="{{ route('index') }}"><i class="fa-solid fa-house"></i><p class="p1">Home</p></a></li>
                        <li><a href="{{ route('movies') }}"><i class="fa-solid fa-clapperboard"></i><p class="p1">Movies</p></a></li>
                        <li><a href="{{ route('sports') }}"><i class="fa-solid fa-volleyball"></i><p class="p1">Sports</p></a></li>
                        <li><a href="{{ route('categories') }}"><i class="fa-solid fa-layer-group"></i><p class="p1">Categories</p></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div class="subscription-section">
            <div class="container">
            <div class="payment-card">
    <h2>Subscription Details</h2>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $subscription->name }}</p>
        <p><strong>Price:</strong> ₹{{ $subscription->price }}</p>
        <p><strong>Resolution:</strong> {{ $subscription->resolution }}</p>
        <p><strong>Access:</strong> {{ $subscription->access }}</p>
        <p><strong>Supported Devices:</strong> {{ $subscription->devices }}</p>
        
        <form id="razorpay-payment-form" method="POST" action="{{ route('verify.payment') }}">
            @csrf
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="{{ $razorpay_key }}"
                data-amount="{{ $order->amount }}"
                data-currency="INR"
                data-order_id="{{ $order->id }}"
                data-buttontext="Pay Now"
                data-name="Hotstar"
                data-description="Subscription Payment"
                data-prefill.name="John Doe"
                data-prefill.email="johndoe@example.com"
                data-theme.color="#F37254"
            ></script>
        </form>
    </div>
</div>

            </div>
        </div>
    </div>
    
    <!-- jQuery for interactivity -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById('razorpay-payment-form').addEventListener('submit', function (e) {
            e.preventDefault();

            var form = this;
            var subscriptionId = {{ $subscription->id }};

            fetch('{{ route('payment') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ subscription_id: subscriptionId }),
            })
                .then(response => response.json())
                .then(order => {
                    var options = {
                        key: '{{ env('RAZORPAY_KEY_ID') }}',
                        amount: order.amount,
                        currency: 'INR',
                        name: 'Hotstar',
                        description: 'Subscription Payment',
                        order_id: order.id,
                        handler: function (response) {
                            fetch('{{ route('verify.payment') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                },
                                body: JSON.stringify(response),
                            })
                                .then(res => res.json())
                                .then(data => {
                                    if (data.status === 'success') {
                                        alert('Payment successful! Subscription activated.');
                                    } else {
                                        alert('Payment verification failed.');
                                    }
                                });
                        },
                        theme: {
                            color: '#F37254',
                        },
                    };

                    var rzp = new Razorpay(options);
                    rzp.open();
                });
        });
    </script>
</body>
</html>
