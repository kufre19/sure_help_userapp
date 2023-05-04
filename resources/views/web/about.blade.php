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


    






   
@endsection
