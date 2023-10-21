
@extends('layouts.web.app')

@section('main-content')
    <!-- ======================header started====================== -->

   

    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>Contact Us</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Contact Us</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="_pl_rt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_lo_we_ds">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="far fa-location"></i>
                                            <h3>Location</h3>4353 White Pine Lane
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="far fa-envelope"></i>
                                            <h3>Email</h3>sales@smarteyeapps.com
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="fas fa-mobile-alt"></i>
                                            <h3>Phone</h3>540-715-1353
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Form started====================== -->

    <section class="my-pla">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 style="color:#fff;">Get In Touch</h2>
                        <p style="color:#fff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod
                            tempor incididunt</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="name">Name <small>*</small></label>
                        <input id="name" name="name" class="form-control _ge_de_ol" type="text"
                            placeholder="Enter Name" required="" aria-required="true">
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="name">Email <small>*</small></label>
                        <input id="email" name="email" class="form-control _ge_de_ol" type="text"
                            placeholder="Enter Email" required="" aria-required="true">
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="name">Subject <small>*</small></label>
                        <input id="subject" name="subject" class="form-control _ge_de_ol" type="text"
                            placeholder="Enter Subject" required="" aria-required="true">
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label for="name">Phone <small>*</small></label>
                        <input id="phone" name="phone" class="form-control _ge_de_ol" type="text"
                            placeholder="phone number" required="" aria-required="true">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control required" rows="5" placeholder="Enter Message"
                            aria-required="true"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- ====================== Map started====================== -->

    <section class="mab-01">
        <iframe style="width:100%"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"
            height="450" frameborder="0" allowfullscreen=""></iframe>
    </section> --}}
@endsection
