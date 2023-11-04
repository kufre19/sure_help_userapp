<header>
  <div class="my-nav">
    <div class="container">
      <div class="row">
        <div class="nav-items">
          <div class="menu-toggle"></div>
          <div class="logo">
            <img src="{{ asset('assets/web/images/logo.png') }}" width="30%">
          </div>
          <div class="menu-items">
            <div class="menu">
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about') }}">About Us</a></li>
                <li><a href="{{ url('store') }}">Free Store</a></li>
                
                <!-- Check if main app user is logged in -->
                @if(Auth::guard('userMainApp')->check())
                  <li><a href="{{ url('dashboard') }}">Account</a></li>
                <!-- Check if sponsor user is logged in -->
                @elseif(Auth::guard('userSponsor')->check())
                  <li><a href="{{ url('sponsor/dashboard') }}">Account</a></li>
                @else
                  <!-- Display Login and Sign Up if no user is logged in -->
                  <li><a href="{{ url('login') }}">Login</a></li>
                  <li><a href="{{ url('register') }}">Sign Up</a></li>
                <li><a href="{{ url('sponsor/register') }}">Become A Sponsor</a></li>

                @endif
                
             
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
