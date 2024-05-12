<div class="nav-container">
  <div class="nav-left-container">
    <div class="left-ul-container">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/movies">Movies</a></li>
      </ul>
    </div>
  </div>
  <div class="nav-centre-container">
    <img class="logo" src="{{ asset('images/film_roll.png') }}" alt="Logo">
  </div>

  <div class="nav-right-container">
    <div class="right-ul-container">
      <ul>
        @if (Auth::check())
        @if (Auth::user()->access_level >= 1) <li class="nav-item dropdown">
          <a id="navbarDropdown">
            {{ Auth::user()->name }}
          </a>
          <div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @else <!-- For regular users -->
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        @endif
        @else <!-- For guests -->
        @if (Route::has('login'))
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @endif
        @if (Route::has('register'))
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @endif
        @endif
      </ul>
    </div>
  </div>
</div>