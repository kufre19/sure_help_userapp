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
        <h1 class="h3 mb-4 text-gray-800">My Requests</h1>

        <!-- Add this at the top left of the dashboard page content area -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createRequestModal">
            + New Request
        </button>


    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid mt-2">
        <div class="row">
            @if ($posts != null)
                @foreach ($posts as $post)
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                {{ $post->post_title }}
                            </div>
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ $post->post_video }}"
                                        allowfullscreen="allowfullscreen" frameborder="0" autoplay="0" controls></iframe>
                                </div>


                                <p>{{ $post->post_description }}</p>
                            </div>
                            <div class="card-footer">
                                <p>Status: {{ $post->post_status }}</p>
                                <button class="btn btn-danger btn-sm delete-post" data-id="{{ $post->id }}"><i
                                        class="fas fa-trash-alt"></i></button>

                            </div>
                        </div>
                    </div>
                @endforeach
            @endif





        </div>
        @if ($posts)
            <div class="row">
                <p> {{ $posts->links() }}</p>
            </div>
        @endif



    </div>

    @include('user.dashboard.modals.create-new-request')

@endsection



@section('extraJS')
    <script>
        $(document).on('click', '.delete-post', function() {
            var postId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request
                    $.ajax({
                        url: "{{ url('dashboard/post/delete') }}/" +
                        postId, // Update this URL to your delete route
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: postId
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Your post has been deleted.',
                                'success'
                            )
                            // Remove the card element
                            $('#card-' + postId).fadeOut(500, function() {
                                $(this).remove();
                            });
                        },
                        error: function(response) {
                            Swal.fire(
                                'Error!',
                                'There was a problem deleting your post.',
                                'error'
                            )
                        }
                    });
                }
            })
        });
    </script>
@endsection
