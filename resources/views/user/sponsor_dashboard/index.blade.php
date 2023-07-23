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
        <h1 class="h3 mb-4 text-gray-800">Posts</h1>

    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
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

        <div class="modal userModal " id="userModalid" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userModalLabel">User Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="user-image"></div>
                            <div class="user-details"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button id="closeUserModal" type="button" class="btn btn-secondary">Close</button>

                    </div>


                </div>
            </div>
        </div>



    </div>
@endsection


@section('extraJS')
    <script>
        $('#closeModal2').click(function() {
            $('#exampleModal2').modal('hide');
        });
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var type = button.data('type') // Extract info from data-* attributes
            var post_id = button.data('post-id') // Extract info from data-* attributes

            var modal = $(this)
            modal.find('#button-type').val(type)
            modal.find('#post_id').val(post_id)

        })

        $(document).ready(function() {
            // Event listener for fetch user button
            $('.fetch-user').click(function() {
                var userId = $(this).data('user-id');

                // AJAX request to fetch user data
                $.ajax({
                    type: 'GET',
                    url: "{{ url('dashboard/request/view/user') }}" + "/" + userId,
                    success: function(user) {
                        // Show user data in modal popup
                        $('.user-image').css('background-image', 'url(' + user.imageSrc + ')');
                        var details_loaded = "Name:" + user.name + '<br>' + "Email:" + user
                            .email + '<br>' +
                            "Phone" + user.phone + '<br>' + "Address:" + user.address + '<br>' +
                            "Country:" + user.country
                        $('.user-details').html(details_loaded);
                        $('.userModal').css('display', 'block');
                    },
                    error: function() {
                        alert('Error fetching user data');
                    }
                });
            });


        });
        $('#closeUserModal').click(function() {

            $('#userModalid').css('display', 'none');
        });
    </script>
@endsection
