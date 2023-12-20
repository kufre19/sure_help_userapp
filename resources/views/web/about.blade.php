@extends('layouts.web.app')

@section('main-content')
   

    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>About Us</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>About Us</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="se-001">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="_Ol_er_qw">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda
                            maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis
                            aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam
                            provident porro, quam suscipit quibusdam. Commodi eum, optio quo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda
                            maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis
                            aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam
                            provident porro, quam suscipit quibusdam. Commodi eum, optio quo.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="_Ol_er_qw yu">
                        <img src="{{ asset('assets/web/images/team/11.jpg')}}">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== section started====================== -->

    {{-- <section class="bg-03">
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
    </section> --}}

    <!-- ====================== Team Started started====================== -->

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <div class="heading">
                        <h2>OUR TEAM</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime totam quo, ducimus aliquid
                            quisquam
                            minima perspiciatis repellendus, minus tenetur reiciendis quis? Consequatur perferendis
                            deleniti, rerum
                            delectus consectetur modi praesentium deserunt.
                        </p>
                    </div> --}}
                </div>

                <div class="col-12">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class=" team-card">
                                <div class="image-team">
                                    <img src="{{ asset('assets/web/images/team/13.jpg')}}">
                                </div>
                                <div class="team-content">
                                    <h3>Mrs Edith Praise</h3>
                                    <p>Co-Founder</p>
                                    <ol>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-pinterest-p"></i></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="team-card">
                                <div class="image-team">
                                    <img src="{{ asset('assets/web/images/team/12.jpg')}}">
                                </div>
                                <div class="team-content">
                                    <h3>Eric Bouli</h3>
                                    <p>Project Supervisor</p>
                                    <ol>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-pinterest-p"></i></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
