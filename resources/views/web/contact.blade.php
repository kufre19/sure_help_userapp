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
                <div class="col-md-6 border">
                    <form id="contact-form" method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
