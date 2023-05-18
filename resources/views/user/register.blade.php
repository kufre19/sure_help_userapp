@extends('layouts.user.login-register')
@section('main-content')
    <section class="vh-100 ">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('custom/login_reg/img/register-img.svg') }}" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-5 pt-5 ">
                    <form action="{{ url('register') }}" class="pt-5" method="POST">
                        @csrf

                        <!-- name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example1" class="form-control form-control-lg"
                                placeholder="Enter Your Full Name" />
                            <label class="form-label" for="form3Example1"> Full Name</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- birthday input -->
                        <div class="form-outline mb-4">
                            <input type="date" id="form3Example3" class="form-control form-control-lg" placeholder="" />
                            <label class="form-label" for="form3Example3">Birthday</label>
                        </div>
                        {{-- <!-- ,phone  input -->
                        <div class="form-outline mb-4">
                            <select name="gener" id="gender_select"
                                class="form-control  browser-default custom-select">
                                <option value="none" selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div> --}}

                        <!-- ,zipcode  input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="zip_code" name="zipcode" class="form-control form-control-lg"
                                placeholder="Enter Zip Code" />
                            <label class="form-label" for="zip_code">Zip Code</label>
                        </div>

                        <!-- ,country  input -->
                        <div class="form-outline mb-4">
                            <select id="countrySelect" name="country" class=" ">
                                <option value="">Select a country</option>
                            </select>

                            <label class="form-label" for="countrySelect"></label>
                        </div>

                        <!-- gender input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>



                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->

                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn  btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#25C702">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0"> have an account already? <a href="#!"
                                    class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- End your project here-->
@endsection

@section('js-script')
    <script>
        // Fetch countries from REST Countries API
        fetch('https://restcountries.com/v3.1/all')
            .then(response => response.json())
            .then(data => {
                const countrySelect = document.getElementById('countrySelect');

                // Iterate through the country data and create options for the dropdown
                data.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.name.common;
                    option.textContent = country.name.common;
                    countrySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>
@endsection
