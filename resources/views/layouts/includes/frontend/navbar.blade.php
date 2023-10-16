  <!--navbar-->
  <header class="header">
    <a href="index.html" class="brand">
      <img alt="logo" style="width: 75px;" src="\assets\frontend\NAVBAR_Logo__1_-removebg-preview.png"/></a>
      <div class="menu-btn"></div>
    <div class="navigation1">
      <div class="navigation1-items1 active">
        <a href="{{ url('/') }}">HOME</a>
        <a href="{{ url('/shop') }}">SHOP</a>

        <!-- Authentication Links -->
        @guest
                    
        @if (Route::has('login'))
        <a href="{{ route('login') }}">{{ __(' LOGIN') }}</a>
        @endif

        @if (Route::has('register'))
        <a href="{{ route('register') }}">{{ __('REGISTER') }}</a>
        @endif

        @else
        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

        {{-- <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a> --}}

        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
        </div>                    
        @endguest
        <!-- <a href="">REGISTER</a>
        <a href="">LOGIN</a> -->
      </div>
    </div> 
  </header>
<!--end of navbar-->