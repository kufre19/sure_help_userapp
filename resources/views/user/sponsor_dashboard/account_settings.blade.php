@extends('layouts.user.sponsor_dashboard.custom.app')
@section('extraCss')
    <style>
        .user-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ddd;
            background-size: cover;
            background-position: center;
        }
    </style>
@endsection

@section('page_content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-6">
                <div class="card">

                    <div class="card-header">Personal Info</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('dashboard/account/settings/update')}}" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="exampleTextField">Change Your Address</label>
                                <input type="text" name="address" class="form-control" id="exampleTextField" placeholder="Enter Your Address">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextField1">Change Your Zip Code</label>
                                <input type="text" name="zipcode" class="form-control" id="exampleTextField1" placeholder="Enter Your Zip Code">

                               
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFile">Change Profile Pooto</label>
                                <input type="file" name="profile_photo" class="form-control-file" id="exampleFile" accept="image/*">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
                
                
            </div>

            <div class="col-6">
                <img class="rounded-circle" alt="avatar1" width="50%" src="{{Auth::user()->profile_photo ?? asset('assets/custom/img/undraw_profile.svg')}}" />
                {{-- <img class="rounded-circle" alt="avatar1" width="50%" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" /> --}}
            </div>

        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">

                    <div class="card-header">Change Your Password</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('dashboard/account/settings/change-password')}}" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="exampleTextField">Old Password</label>
                                <input type="text" name="old-password" class="form-control" id="exampleTextField" placeholder="Enter Your Old Password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextField1">New Password</label>
                                <input type="text" name="new-password" class="form-control" id="exampleTextField1" placeholder="Enter New Password" required>

                               
                            </div>
                            <div class="form-group">
                                <label for="exampleTextField1">Repeat New Password</label>
                                <input type="text" name="new-password-repeat" class="form-control" id="exampleTextField1" placeholder="Repeat Your New Password" required>

                               
                            </div>
                         
                           
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
                
                
            </div>

            <div class="col-6">
                <div class="card">

                    <div class="card-header">Change Your Help Offer</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('dashboard/account/settings/change-help-offer')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <h5>Select the help category(s) you want to offer</h5>
                                <!-- Checkbox -->
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox" id="inlineCheckbox1"
                                        value="Agricultural Help">
                                    <label class="form-check-label" for="inlineCheckbox1">Agricultural Help</label>
                                </div>
                                <div class=" col-3 form-check form-check-inline">
                                    <input class="form-check-input" name="help_offering[]" type="checkbox" id="inlineCheckbox2"
                                        value="Counseling Help">
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
                           
                            <button type="submit" class="btn btn-primary">Change Help Offer</button>
                        </form>
                    </div>
                </div>
                
                
            </div>

           

        </div>






    </div>
@endsection


@section('extraJS')
@endsection
