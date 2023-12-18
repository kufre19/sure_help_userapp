@extends('layouts.web.app')

@section('title', 'home')


@section('main-content')

    <!-- ======================slider section started====================== -->

    <section id="carouselExampleFade" class="carousel slide carousel-slide slider" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/web/images/slider/4.jpg') }}" class="d-block" alt="...">
                <div class="carousel-caption">
                    <h2>Best Education For Diploma</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui perspiciatis, eveniet sequi labore vel
                        itaque
                        adipisci odio necessitatibus voluptatibus saepe, impedit enim unde velit amet rem, suscipit corrupti
                        vero
                        ad.</p>
                    <div class="button-01">
                        <ul>
                            <li><a href="#">Get Started Now</a></li>
                            <li><a href="#">View Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/web/images/slider/5.jpg') }}" class="d-block" alt="...">
                <div class="carousel-caption">
                    <h2>Best Education For Diploma</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui perspiciatis, eveniet sequi labore vel
                        itaque
                        adipisci odio necessitatibus voluptatibus saepe, impedit enim unde velit amet rem, suscipit corrupti
                        vero
                        ad.</p>
                    <div class="button-01">
                        <ul>
                            <li><a href="#">Get Started Now</a></li>
                            <li><a href="#">View Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/web/images/slider/3.jpg') }}" class="d-block" alt="...">
                <div class="carousel-caption">
                    <h2>Best Education For Diploma</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui perspiciatis, eveniet sequi labore vel
                        itaque
                        adipisci odio necessitatibus voluptatibus saepe, impedit enim unde velit amet rem, suscipit corrupti
                        vero
                        ad.</p>
                    <div class="button-01">
                        <ul>
                            <li><a href="#">Get Started Now</a></li>
                            <li><a href="#">View Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>


    <!-- ====================== section started====================== -->

    <section class="bg-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-lightbulb-dollar"></i>
                        </div>
                        <div class="content">
                            <h3>Get Inspired</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-box-usd"></i>
                        </div>
                        <div class="content">
                            <h3>Give Donation</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-person-sign"></i>
                        </div>
                        <div class="content">
                            <h3>Become a Volunteer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-child"></i>
                        </div>
                        <div class="content">
                            <h3>Help The Children</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================== Featured started====================== -->

    {{-- <section class="bg-02">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>OUR SERVICES</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime totam quo, ducimus aliquid
                            quisquam
                            minima perspiciatis repellendus, minus tenetur reiciendis quis? Consequatur perferendis
                            deleniti, rerum
                            delectus consectetur modi praesentium deserunt.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/4.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>RAISE FUND FOR HEALTHY FOOD</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/2.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>EDUCATION FOR POOR CHILDREN</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="assets/images/causes/6.jpg">
                        </div>
                        <div class="content">
                            <h3>PROMOTING THE RIGHTS OF CHILDREN</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/5.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>MASSIVE DONATION TO POOR</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/4.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>HUGE HELP TO HOMELESS PUPIL</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/2.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>LET’S BUILD SOME HOMES.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/3.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>PURE WATER FOR POOR PEOPLE</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/1.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>MEDICAL FACILITIES</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('assets/web/images/causes/5.jpg')}}">
                        </div>
                        <div class="content">
                            <h3>MASSIVE DONATION TO POOR</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>Year Full</li>
                                <li>100 Children</li>
                                <li>any time</li>
                            </ol>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section> --}}

    <section class="bg-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-school"></i>
                        <div class="counting" data-count="128">128</div>
                        <h5>Primary Schools</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-hospitals"></i>
                        <div class="counting" data-count="300">300</div>
                        <h5>Hospitals</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-hands-helping"></i>
                        <div class="counting" data-count="250">250</div>
                        <h5>Volunteers</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-trophy"></i>
                        <div class="counting" data-count="400">400</div>
                        <h5>Winning Awards</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Team Started started====================== -->

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Testimonials</h2>
                        <p>Discover our reach in the past years! Below are genuine testimonials from individuals
                             who have benifited from our programme the quality, reliability, and excellence we're committed
                            to delivering. Each review reflects our programm</p>

                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        @foreach ($testimonials as $testimonial)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="team-card">
                                    <div class="image-team">
                                        <img src="{{ $testimonial->imageurl }}">
                                    </div>
                                    <div class="team-content">
                                        <h3>{{ $testimonial->written_by }}</h3>
                                        <p>{{ $testimonial->shortdesc }}</p>


                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Blog Section started====================== -->

    {{-- <section class="bg-04">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Latest help</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we"></div>
                        <div class="_xs_we_er">
                            <div class="_he_w">
                                <h3>How To Donate</h3>
                                <ol>
                                    <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                                </ol>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url({{ asset('assets/web/images/blog/blog_1.jpg') }}">
                        </div>
                        <div class="_xs_we_er">
                            <div class="_he_w">
                                <h3>Become A Volounteer</h3>
                                <ol>
                                    <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                                </ol>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url(assets/images/blog/blog_3.jpg"></div>
                        <div class="_xs_we_er">
                            <div class="_he_w">
                                <h3>Partnering to create a community</h3>
                                <ol>
                                    <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                                </ol>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> --}}






@endsection
