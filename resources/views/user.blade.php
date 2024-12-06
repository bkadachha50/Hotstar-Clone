<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body>
    
    <div class="main-section">
        @include('adminNavbar')
        <div class="content-section">
            <nav>
                <h2>Users</h2>
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <i class="ri-search-line"></i>
                </div>
            </nav>
            <section>
                <div class="user-section">
                    <h2>Accounts</h2>
                    <table> 
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile</th>
                                <th>Status</th>
                                <th>Role</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td style="width:5vw; height:7.5vw;">
                                        <img src="{{ asset('User_profiles/' . $user->image) }}" alt="" style="height: 85px;width: 85px;object-fit: cover; border-radius:50%">
                                    </td> 
                                    <td>{{ $user->status }}</td> 
                                    <td>{{ $user->role }}</td> 
                                    <td>
                                        <a href="{{ route('edit', $user->id) }}" class="Delete" style="color:#737fec92; padding-top:5.5px; height:27px; width:65px; font-size:13px; margin-right:-60px">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('delete') }}">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <input type="submit" class="Delete" name="delete_user" value="Delete" style="width:65px;">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
            <div class="upload" style="bottom: 7.2vw;">
                <a class="upload_movies" href="{{ route('user') }}">View All Users</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/user.js') }}"></script>
</body>
</html>
