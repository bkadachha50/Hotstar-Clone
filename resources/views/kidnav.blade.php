<div class="nav-section">
        <nav>
          <div class="logo">
          <img src="{{ asset('Images/Logo-Background/Disney.svg') }}" alt="Logo" style="display: flex; flex-direction: column;margin-left: 1.2vw;">         
            <button style="margin-left: 0vw"><a href="{{ route('subcription') }}"> Subcription </a></button>
          </div>
          <div class="menu" onmouseover = "show()" onmouseleave = "left()">
            <ul>
              <li><a  href="{{ route('my_space') }}"> <i class="fa-solid fa-user"></i> <p class="p1">My Space</p> </a> </li>
              <li><a  href="{{ route('search') }}"> <i class="fa-solid fa-magnifying-glass"></i> <p class="p1">Search</p> </a> </li>
              <li><a  href="{{ route('kid') }}"> <i  class="fa-solid fa-house"></i> <p class="p1">Home</p> </a> </li>
              <li><a  href="{{ route('watchlist') }}"> <i class="fa-solid fa-bookmark"></i> <p class="p1">Watchlist</p> </a> </li>
              <li>
                  <a href="{{ route('notifications') }}">
                      <i class="fa-solid fa-bell" 
                        style="color: {{ $unreadCount > 0 ? '#ff4545' : '#ffffff' }};">
                      </i>
                      @if($unreadCount > 0)
                          <span class="badge" style="color: #ff4545">{{ $unreadCount }}</span>
                      @endif
                      <p class="p1" style="color: {{ $unreadCount > 0 ? '#ff4545' : '#ffffff' }};">Notification</p>
                  </a>
              </li>
            </ul>
          </div>
        </nav>
</div>