<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Free Store </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    {{-- MDB --}}
    @include('layouts.mdb-css-inclusion')
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('custom/store/css/style.css') }}" />
</head>

<body>

    @include('layouts.store.navigation')

    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('custom/assets/img/background-1.jpg') }}" class="d-block w-100"
                    alt="Wild Landscape" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-sm-block mb-5">


                    <h2>
                        <strong>{{ env('APP_NAME') }} Free Shop</strong>
                    </h2>

                    <p class="mb-4 d-none d-md-block">
                        <strong>You can shop for free items here without fees</strong>
                    </p>


                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('custom/assets/img/background-2.jpg') }}" class="d-block w-100" alt="Camera" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h2>
                        <strong>{{ env('APP_NAME') }} Free Shop</strong>
                    </h2>

                    <p class="mb-4 d-none d-md-block">
                        <strong>You can shop for free items here without fees</strong>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('custom/assets/img/background-3.jpg') }}" class="d-block w-100" alt="Camera" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h2>
                        <strong>{{ env('APP_NAME') }} Free Shop</strong>
                    </h2>

                    <p class="mb-4 d-none d-md-block">
                        <strong>You can shop for free items here without fees</strong>
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Main layout-->
    @yield('main-content')
    <!--Main layout-->

    <footer class="text-center text-white mt-4" style="background-color: #25C702">

        <!--Call to action-->

        <!--/.Call to action-->

        <hr class="text-dark">

        <div class="container">
            <!-- Section: Social media -->
            <section class="mb-3">

                <!-- Facebook -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>




            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-color: #E0E0E0">
            © {{ date('Y') }} Copyright:
            <a class="text-white" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
        </div>
        <!-- Copyright -->
    </footer>
    {{-- MDB --}}
    @include('layouts.mdb-js-inclusion')
    
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('custom/store/js/script.js') }}"></script>
</body>

</html>
