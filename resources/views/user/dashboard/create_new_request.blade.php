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
        <h1 class="h3 mb-4 text-gray-800">New Request</h1>

    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <form method="POST" action="{{ url('dashboard/request/create') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleTextField">Title of your help post</label>
                        <input type="text" name="title" class="form-control" id="exampleTextField"
                            placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextArea">Describe your need</label>
                        <textarea class="form-control" name="description" id="exampleTextArea" rows="3" placeholder="Enter description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect">Help Category</label>
                        <select class="form-control" id="exampleSelect">
                            <option value="option1">Counseling</option>
                            <option value="option2">Food items</option>
                            <option value="option3">Clothing</option>
                            <option value="option3">Finacial</option>
                            <option value="option3">Medical</option>
                            <option value="option3">Academical</option>
                            <option value="option3">Shelter</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFile">Upload Your Video</label>
                        <input type="file" capture="user" name="help_video" class="form-control-file" id="exampleFile" accept="video/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>





    </div>
@endsection


@section('extraJS')
@endsection
