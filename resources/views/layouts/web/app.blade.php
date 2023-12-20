<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'home')</title>
    <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body>

    <!-- ======================header started====================== -->
    @include('layouts.web.navigations')



    @yield('main-content')


    <!-- ====================== Footer Section started====================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>SURE HELP</h3>
                        <p>ipsum dolor sit amet, Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>Quick Links</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i><a href="{{url('/')}}">Home</a></li>
                            <li><i class="far fa-angle-right"></i><a href="{{url('about')}}">About</a></li>
                            <li><i class="far fa-angle-right"></i><a href="{{url('store')}}">Free Store</a></li>
                            <li><i class="far fa-angle-right"></i><a href="{{url('login')}}">Login</a></li>
                            <li><i class="far fa-angle-right"></i><a href="{{url('register')}}">Sign Up</a></li>
                            <li><i class="far fa-angle-right"></i><a href="{{url('sponsor/register')}}">Become A Sponsor</a></li>
                            <li class="last"><i class="far fa-angle-right"></i><a href="{{url('contact')}}">Contact Us</a></li>
                        </ol>
                    </div>
                </div>



                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>Contact Us</h3>
                        <form class="my-form">
                            <div class="form-group">
                                <input class="form-control" type="emal" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea rows="3" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="#">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="copy-right">
                        <p>© {{ date('Y') }} All Rights Reserved by<a href="{{ url('/') }}">Sure Help</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- Floating Donate Button -->
<a href="{{ url('/donate') }}" class="floating-donate-btn">
    <i class=" fa fa-donate"></i>
</a>

<script src="{{ asset('assets/web/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/web/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@include('web.alerts.sweet-alert')

@yield('extra-js')

</html>
