@extends('layouts.user.dashboard.custom.app')
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
        <div class="row  g-5 mb-2">

            <div class="col-lg-6 d-flex justify-content-center">
                <img class="rounded-circle" alt="avatar1" width="50%" src="{{Auth::user()->profile_photo ?? asset('assets/custom/img/undraw_profile.svg')}}" />
                {{-- <img class="rounded-circle" alt="avatar1" width="50%" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" /> --}}
            </div>

            <div class="col-lg-6">
                <div class="card">

                    <div class="card-header">Personal Info</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('dashboard/account/settings/update')}}" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="exampleTextField">Change Your Address</label>
                                <input type="text" name="address" class="form-control" id="exampleTextField" value="{{Auth::user()->address}}" placeholder="Enter Your Address">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextField1">Change Your Zip Code</label>
                                <input type="text" name="zipcode" class="form-control" id="exampleTextField1"  value="{{Auth::user()->zip_code}}" placeholder="Enter Your Zip Code">

                               
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFile">Change Profile Photo</label>
                                <input type="file" capture="user" name="profile_photo" class="form-control-file" id="exampleFile" accept="image/*">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
                
                
            </div>

           

        </div>

        <div class="row  g-5 ">
            <div class="col-lg-6">
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
                                <input type="text" name="new-password_confirmation" class="form-control" id="exampleTextField1" placeholder="Repeat Your New Password" required>

                               
                            </div>
                         
                           
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
                
                
            </div>

           

        </div>





    </div>
@endsection


@section('extraJS')
    <script>
        // Check for session messages
        @if($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: `{!! implode('<br>', $errors->all()) !!}`,
        });
        @endif
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        @elseif(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        @endif
    </script>
@endsection
