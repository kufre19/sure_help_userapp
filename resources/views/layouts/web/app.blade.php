<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>

    <link href="{{asset('custom/assets/fonts.googleapis.com/csse965.css?family=Roboto:300,400%7CSource+Sans+Pro:700')}}" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{asset('custom/assets/css/bootstrap.min.css')}}" >

    <link type="text/css" rel="stylesheet" href="{{asset('custom/assets/css/owl.carousel.css')}}" >
    <link type="text/css" rel="stylesheet" href="{{asset('custom/assets/css/owl.theme.default.css')}}" >

    <link rel="stylesheet" href="{{asset('custom/assets/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('custom/assets/css/style.css')}}">

</head>

<body>

    <header id="home">

        <nav id="main-navbar">
            <div class="container">
                <div class="navbar-header">

                    <div class="navbar-brand">
                        <a class="logo" href="{{url("/")}}"><img src="{{asset('surehelp_logo.png')}}" alt="logo"> Sure Help Executive Service</a>
                    </div>


                    <button class="navbar-toggle-btn">
                        <i class="fa fa-bars"></i>
                    </button>


                </div>

                

                @include('layouts.web.navigations')

            </div>
        </nav>


        <div id="home-owl" class="owl-carousel owl-theme">

            <div class="home-item">

                <div class="section-bg" style="background-image: url({{asset('custom/assets/img/background-1.jpg')}});"></div>


                <div class="home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="home-content">
                                    <h1>Save The Children</h1>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="#" class="primary-button">View Causes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="home-item">

                <div class="section-bg" style="background-image: url({{asset('custom/assets/img/background-2.jpg')}});"></div>


                <div class="home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="home-content">
                                    <h1>Become A Partner</h1>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="#" class="primary-button">Join Us Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </header>


    @yield('main-content')





    {{-- <div id="blog" class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2 class="title">Our Blog</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="article">
                        <div class="article-img">
                            <a href="single-blog.html">
                                <img src="img/post-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum
                                    quem reque</a></h3>
                            <ul class="article-meta">
                                <li>12 November 2018</li>
                                <li>By John doe</li>
                                <li>0 Comments</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="article">
                        <div class="article-img">
                            <a href="single-blog.html">
                                <img src="img/post-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu.
                                    Justo accusata ius at</a></h3>
                            <ul class="article-meta">
                                <li>12 November 2018</li>
                                <li>By John doe</li>
                                <li>0 Comments</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="article">
                        <div class="article-img">
                            <a href="single-blog.html">
                                <img src="img/post-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum
                                    quem reque</a></h3>
                            <ul class="article-meta">
                                <li>12 November 2018</li>
                                <li>By John doe</li>
                                <li>0 Comments</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div> --}}


    <footer id="footer" class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="footer">
                        <div class="footer-logo">
                            <a class="logo" href="#"><img src="{{asset('surehelp_logo.png')}}" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <ul class="footer-contact">
                            <li><i class="fa fa-map-marker"></i> address</li>
                            <li><i class="fa fa-phone"></i>phone</li>
                           
                        </ul>
                    </div>
                </div>


                


                <div class="col-md-4">
                    <div class="footer">
                        <h3 class="footer-title">Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <form class="footer-newsletter">
                            <input class="input" type="email" placeholder="Enter your email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>


            <div id="footer-bottom" class="row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        {{-- <li><a href="#">Causes</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li> --}}
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                        <span>
                            Copyright &copy;
                           
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | {{env('APP_NAME')}}| {{date("Y")}}</a>
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </footer>


    <script src="{{asset('custom/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('custom/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('custom/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('custom/assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('custom/assets/js/main.js')}}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
  
</body>

</html>
