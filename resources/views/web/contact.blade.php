@extends('layouts.web.app')

@section('main-content')
    <div id="contact" class="section">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>1-800-555-1234</p>
                    </div>
                    <div class="contact-info">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>info@example.com</p>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Address</h4>
                        <p>123 Main St, Anytown USA</p>
                    </div>
                </div>
                <div class="col-md-6 border-solid">
                  <form class="footer-newsletter">
                    <input class="input " type="email" placeholder="Enter your email">
                    <br> 
                    <textarea class="input textarea pd-2" >Enter Your Message </textarea>

                    <button class="primary-button">Message Us</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
