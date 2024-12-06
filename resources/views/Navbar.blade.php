<div class="nav-section">
    <nav>
        <div class="logo">
            <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;margin-left: 1.2vw;">         
            <button style="margin-left: 0vw"><a href="{{ route('subcription') }}"> Subscription </a></button>
        </div>

        <div class="menu" onmouseover="show()" onmouseleave="left()" style="margin-top:2vw">
            <ul>
                @if(session('mode') === 'kid')
                    {{-- Kid Mode Navbar --}}
                    <li><a href="{{ route('my_space') }}"> <i class="fa-solid fa-user"></i> <p class="p1">My Space</p> </a> </li>
                    <li><a href="{{ route('search') }}"> <i class="fa-solid fa-magnifying-glass"></i> <p class="p1">Search</p> </a> </li>
                    <li><a href="{{ route('kid') }}"> <i class="fa-solid fa-house"></i> <p class="p1">Home</p> </a> </li>
                    <li><a href="{{ route('watchlist') }}"> <i class="fa-solid fa-bookmark"></i> <p class="p1">Watchlist</p> </a> </li>
                @else
                    {{-- Normal Mode Navbar --}}
                    <li><a href="{{ route('my_space') }}"> <i class="fa-solid fa-user"></i> <p class="p1">My Space</p> </a> </li>
                    <li><a href="{{ route('search') }}"> <i class="fa-solid fa-magnifying-glass"></i> <p class="p1">Search</p> </a> </li>
                    <li><a href="{{ route('index') }}"> <i class="fa-solid fa-house"></i> <p class="p1">Home</p> </a> </li>
                    <li><a href="{{ route('movies') }}"> <i class="fa-solid fa-clapperboard"></i> <p class="p1">Movies</p> </a> </li>
                    <li><a href="{{ route('sports') }}"> <i class="fa-solid fa-volleyball"></i> <p class="p1">Sports</p> </a> </li>
                    <li><a href="{{ route('categories') }}"> <i class="fa-solid fa-layer-group"></i> <p class="p1">Categories</p> </a> </li>
                    <li><a href="{{ route('watchlist') }}"> <i class="fa-solid fa-bookmark"></i> <p class="p1">Watchlist</p> </a> </li>
                @endif

                {{-- Notification Section --}}
                <li>
                    <a href="{{ route('notifications') }}">
                        <i class="fa-solid fa-bell" style="color: #ffffff"></i>
                        <p class="p1" style="color:#ffffff">Notification</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
