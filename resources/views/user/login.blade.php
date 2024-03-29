@extends('layouts.web.app')

@section('main-content')
    <!-- ======================header started====================== -->



    <section class="bg-02-a" style="background: url({{ asset('custom/login_reg/img/login-img.svg') }}) !important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>User Login</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>User Login</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="_pl_rt">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-8 col-12  rounded p-2">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('login') }}" method="POST">
                        @csrf

                        <!-- Email input -->
                        <div class="form-group">
                            <label for="form3Example3">Email address</label>

                            <input type="email" name="email" id="form3Example3" class="form-control  "
                                placeholder="Enter your email address" />
                        </div>

                        <!-- Password input -->
                        <div class="form-group">
                            <label  for="form3Example4">Password</label>

                            <input type="password" name="password" id="form3Example4" class="form-control  "
                                placeholder="Enter password" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn  btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#25C702">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ url('register') }}"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

   
@endsection
