<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
</head>
<body>
    <div class="main-section">
        @include('adminNavbar')
        <div class="content-section">
            <nav>
                <h2>Content</h2>
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <i class="ri-search-line"></i>
                </div>
            </nav>
            <section>
                <div class="user-section">
                    <h2>Movie / Series List</h2>
                    <table> 
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Img</th>
                                <th>Age Restriction</th>
                                <th>Description</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($movie as $index => $movie)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $movie->name }}</td> 
                                <td style="width:6vw; height:8.5vw;">
                                    <img src="{{ asset('images/Movies/' . $movie->image) }}" alt="{{ $movie->name }}" style="height: 100%;width: 100%;object-fit: cover;  border-radius:2%">
                                </td> 
                                <td>{{ $movie->age }}</td>
                                <td>{{ $movie->description }}</td>
                                <td>
                                    <a href="{{ route('movies.edit', $movie->id) }}">Update</a>
                                </td>
                                <td>
                                    <form method='post' action="{{ route('movies.destroy', $movie->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type='submit' class='Delete' value='Delete'>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
            <div class="upload" style="bottom: 7.2vw;">
                <a class="upload_movies" href="{{ route('movie.create') }}">Upload Movie</a>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
