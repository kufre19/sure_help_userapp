@extends('layouts.web.app')


@section('main-content')
    <div id="about" class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-5">
                    <div class="section-title">
                        <h2 class="title">Welcome to {{ env('APP_NAME') }}</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="about-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="primary-button">Read More</a>
                    </div>
                </div>


                <div class="col-md-offset-1 col-md-6">
                    <a href="#" class="about-video">
                        <i class="play-icon fa fa-play"></i>
                        <img src="{{ asset('custom/assets/img/about.jpg') }}" alt="">
                    </a>
                </div>

            </div>

        </div>

    </div>


    <div id="numbers" class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="number">
                        <i class="fa fa-smile-o"></i>
                        <h3>47k</h3>
                        <span>Donors</span>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="number">
                        <i class="fa fa-heartbeat"></i>
                        <h3>154K</h3>
                        <span>Children Saved</span>
                    </div>
                </div>


               


                <div class="col-md-4 col-sm-6">
                    <div class="number">
                        <i class="fa fa-handshake-o"></i>
                        <h3>50</h3>
                        <span>Partner</span>
                    </div>
                </div>

            </div>

        </div>

    </div>




    <div id="cta" class="section">

        <div class="section-bg" style="background-image: url(img/background-1.jpg);" data-stellar-background-ratio="0.5">
        </div>


        <div class="container">

            <div class="row">

                <div class="col-md-offset-2 col-md-8">
                    <div class="cta-content text-center">
                        <h1>Become A Partner1>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="primary-button">Join Us Now!</a>
                    </div>
                </div>

            </div>

        </div>

    </div>





    <div id="testimonial" class="section">

        <div class="section-bg" style="background-image: url(img/background-2.jpg);" data-stellar-background-ratio="0.5">
        </div>


        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <div id="testimonial-owl" class="owl-carousel owl-theme">

                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{ asset('custom/assets/img/avatar-1.jpg') }}" alt="">
                                </div>
                                <h3>John Doe</h3>
                                <span>Partner</span>
                            </div>
                            <div class="testimonial-quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </blockquote>
                            </div>
                        </div>


                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{ asset('custom/assets/img/avatar-2.jpg') }}" alt="">
                                </div>
                                <h3>John Doe</h3>
                                <span>Partner</span>
                            </div>
                            <div class="testimonial-quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </blockquote>
                            </div>
                        </div>


                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{ asset('custom/assets/img/avatar-1.jpg') }}" alt="">
                                </div>
                                <h3>John Doe</h3>
                                <span>Partner</span>
                            </div>
                            <div class="testimonial-quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </blockquote>
                            </div>
                        </div>


                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{ asset('custom/assets/img/avatar-2.jpg') }}" alt="">
                                </div>
                                <h3>John Doe</h3>
                                <span>Partner</span>
                            </div>
                            <div class="testimonial-quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
