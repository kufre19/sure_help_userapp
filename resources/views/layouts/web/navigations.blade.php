<ul class="navbar-menu nav navbar-nav navbar-right">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="#about">About</a></li>

    <li><a href="{{ url('store') }}">Free Store</a></li>

    <li><a href="{{ url('contact') }}">Contact</a></li>
    @if (!Auth())
        <li><a href="{{ url('login') }}">Login</a></li>
        <li><a href="{{ url('register') }}">SignUp</a></li>
    @else
        <li><a href="{{ url('dashboard') }}">My Account</a></li>
    @endif




</ul>
