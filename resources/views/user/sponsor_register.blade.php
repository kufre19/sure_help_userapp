@extends('layouts.web.app')

@section('main-content')
    <!-- ======================header started====================== -->



    <section class="bg-02-a" style="background: url({{ asset('custom/login_reg/img/sponsor_reg.svg') }}) !important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>Become A Sponsor</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Become A Sponsor</span></p>
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

                    <form action="{{ url('sponsor/register') }}" method="POST">
                        @csrf
                        <div class="col-lg-8 col-12  rounded p-2">
                            <div class="row form-group">
                                <!-- name input -->
                                <div class="col-lg-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1"> Full Name</label>

                                        <input type="text" name="name" id="form3Example1" class="form-control "
                                            placeholder="Enter your full name" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">Email address</label>

                                        <input type="email" name="email" id="form3Example3" class="form-control "
                                            placeholder="Enter a valid email address" />
                                    </div>

                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <!-- ,phone  input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="phone_id">Phone Number</label>

                                        <input type="text" id="phone_id" name="phone" class="form-control "
                                            placeholder="Enter Your Phone Number" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- address input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="address_id">Your address</label>

                                        <input type="text" name="address" id="address_id" class="form-control "
                                            placeholder="Enter your address" />
                                    </div>
                                </div>


                            </div>



                            <!-- birthday input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Birthday</label>

                                <input type="date" name="birthday" id="form3Example3" class="form-control "
                                    placeholder="" />
                            </div>
                            <!-- ,gender  input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="gender_select">Select Gender</label>

                                <select name="gender" id="gender_select"
                                    class="form-control  browser-default custom-select">
                                    <option value="none">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>



                            <!-- ,country  input -->
                            <div class="form-group mb-2">
                                <label class="form-label" for="countrySelect">Select Country</label>

                                <select id="countrySelect" name="country" class="form-control ">
                                    <option value="">Select a Country</option>
                                </select>
                            </div>





                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="pass">Enter Password</label>

                                <input type="password" name="password" id="pass" class="form-control "
                                    placeholder="Enter password" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="pass_1">Confirm Password</label>

                                <input type="password" name="password_confirmation" id="pass_1" class="form-control "
                                    placeholder="Confirm password" />
                            </div>




                            <div class="row">
                                <h5>Select the help category(s) you want to offer</h5>
                                <!-- Checkbox -->
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox"
                                        id="inlineCheckbox1" value="Agricultural Help">
                                    <label class="form-check-label" for="inlineCheckbox1">Agricultural Help</label>
                                </div>
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox"
                                        id="inlineCheckbox2" value="Counseling Help">
                                    <label class="form-check-label" for="inlineCheckbox2">Counseling Help</label>
                                </div>
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox"
                                        id="inlineCheckbox3" value="Clothing Help">
                                    <label class="form-check-label" for="inlineCheckbox3">Clothing Help</label>
                                </div>
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox"
                                        id="inlineCheckbox4" value="Finacial Help">
                                    <label class="form-check-label" for="inlineCheckbox4">Finacial Help</label>
                                </div>
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox"
                                        id="inlineCheckbox5" value="Medical Help">
                                    <label class="form-check-label" for="inlineCheckbox5">Medical Help</label>
                                </div>
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox"
                                        id="inlineCheckbox6" value="Food Items">
                                    <label class="form-check-label" for="inlineCheckbox6">Food Items</label>
                                </div>
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox"
                                        id="inlineCheckbox7" value="Shelter">
                                    <label class="form-check-label" for="inlineCheckbox7">Shelter</label>
                                </div>

                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn  btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#25C702">Become A
                                    Sponsor</button>
                                <p class=" fw-bold mt-2 pt-1 mb-0"> have an account already? <a
                                        href="{{ url('login') }}" class="link-danger">Login</a></p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('extra-js')
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
