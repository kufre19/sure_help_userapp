@extends('layouts.user.dashboard.custom.app')
@section('extraCss')
@endsection

@section('page_content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><a href="{{url('dashboard/inbox/messages')}}">Back To Inbox</a></h1>

    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Inbox</h3>

                        
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-1">
                       
                        <div class="text-container">
                            <p class="long-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacinia euismod mi, ac posuere odio vestibulum at. Vivamus sit amet nisi lectus. Sed consectetur ipsum ut diam fermentum, nec auctor leo facilisis. Suspendisse consequat consequat felis vitae tempus. Aenean pretium mauris velit, et scelerisque urna tempus eu. Nulla sed odio eget odio commodo mattis. Etiam sit amet tincidunt quam. Integer fringilla ante sapien, in ultricies turpis sagittis id. Phasellus sit amet condimentum enim. Duis nec mauris id mi convallis fermentum. Vestibulum vehicula ligula vel est gravida, ut varius nunc rutrum. In hac habitasse platea dictumst.
                            </p>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->
                    
                </div>
            </div>
            <!-- /.card -->

        </div>





    </div>
@endsection


@section('extraJS')
@endsection
