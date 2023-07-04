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
        <div class="row">
            <div class="col">
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

        </div>





    </div>
@endsection


@section('extraJS')
@endsection
