<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/subcribe.css') }}">
</head>
<body>
    <div class="main-section">
        @include('adminNavbar')
        <div class="content-section">
            <nav>
                <h2>Subscription</h2>
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <i class="ri-search-line"></i>
                </div>
            </nav>
            <div class="subscription-section">
                <section>
                    <div class="user-section">
                        <h2>Accounts</h2>
                        <table> 
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Plan Name</th>
                                    <th>Amount</th>
                                    <th>Subscription Date</th>
                                    <th>Expiry Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
    @foreach($subscription as $sub) <!-- Make sure to use a unique variable for each item -->
    <tr>
        <td>{{ $sub->id }}</td>
        <td>{{ $sub->user->name }}</td>
        <td>{{ $sub->user->email }}</td>
        <td>{{ $sub->plan_name }}</td>
        <td>{{ $sub->amount }}</td>
        <td>{{ $sub->subscription_date }}</td>
        <td>{{ $sub->expiry_date }}</td>
        <td> <a href="{{ route('subcribe.edit', $sub->id) }}" class="edit-button">Edit</a> <!-- Corrected variable -->
</td>
        <td>
            <form method="POST" action="{{ route('subcribe.destroy', $sub->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

                        </table>
                    </div>
                </section>
                <div class="upload" style="width:78.8vw;bottom: 6.2vw;">
                    <a class="upload_movies" href="">View All Users Subscriptions</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
