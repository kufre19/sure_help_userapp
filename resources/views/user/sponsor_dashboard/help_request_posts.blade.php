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
        <h1 class="h3 mb-4 text-gray-800">Help Request Posts</h1>

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
                            <div class="card-footer">
                                <a href="#" class="btn btn-success fetch-user" data-toggle="modal"
                                    data-target="#userDetailsModal" data-user-id="{{ $post->uuid }}">Provide Help</a>

                                {{-- <a href="#" class="btn btn-success provide-help-button" data-toggle="modal" data-target="#provideHelpModal" data-post-id="{{ $post->id }}">Provide Help</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Help Requested Posted!</p>
            @endif




        </div>
        @if ($posts)
            <div class="row">
                <p> {{ $posts->links() }}</p>
            </div>
        @endif

        <!-- User Details Modal -->
        <div class="modal fade userModal" id="userDetailsModal" tabindex="-1" role="dialog"
            aria-labelledby="userDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userDetailsModalLabel">User Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="user-image"></div>
                        <div class="user-details"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary provide-help-button" data-toggle="modal"
                            data-target="#provideHelpModal">Provide Help</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Provide Help Modal -->
        <div class="modal fade" id="provideHelpModal" tabindex="-1" role="dialog" aria-labelledby="provideHelpModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="provideHelpModalLabel">Provide Help</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="provideHelpForm">
                            <input type="hidden" id="post_id" name="post_id">
                            <div class="form-group">
                                <label for="helpTitle">Title of Help</label>
                                <input type="text" class="form-control" id="helpTitle" name="helpTitle" required>
                            </div>
                            <div class="form-group">
                                <label for="helpDescription">Description</label>
                                <textarea class="form-control" id="helpDescription" name="helpDescription" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="helpType">Type of Help</label>
                                <select class="form-control" id="helpType" name="helpType" required>
                                    <option value="">Select a type</option>
                                    <option value="upload_pdf">Upload PDF</option>
                                    <option value="record_video">Record a Video</option>
                                    <option value="record_audio">Record an Audio</option>
                                    <option value="write_note">Write a Note</option>
                                    <option value="send_money">Send Money</option>
                                </select>
                            </div>
                            <!-- Additional fields based on type of help -->
                            <div class="form-group helpTypeField" id="uploadPdfField">
                                <label for="uploadPdf">Upload PDF</label>
                                <input type="file" class="form-control" id="uploadPdf" name="uploadPdf"
                                    accept="application/pdf">
                            </div>
                            <!-- Other fields for video, audio, note, and money -->
                            <!-- ... -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="provideHelpForm" class="btn btn-primary">Submit Help</button>
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
            // AJAX call to fetch user data when 'fetch-user' button is clicked
            $('.fetch-user').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    type: 'GET',
                    url: "{{ url('sponsor/dashboard/request/view/user') }}" + "/" + userId,
                    success: function(resonse) {
                        // Populate User Details Modal with fetched user data
                        $('.user-image').css('background-image', 'url(' + resonse.user.profile_photo + ')');
                        var details_loaded = "Name:" + resonse.user.fullname + '<br>' +
                            "Email:" + resonse.user.email + '<br>' +
                            "Phone:" + resonse.user.phone + '<br>' +
                            "Address:" + resonse.user.address + '<br>' +
                            "Country:" + resonse.user.country;
                        $('.user-details').html(details_loaded);
                    },
                    error: function() {
                        alert('Error fetching user data');
                    }
                });
            });

            // Open Provide Help Modal from User Details Modal
            $('.provide-help-button').click(function() {
                // Close the User Details Modal
                $('#userDetailsModal').modal('hide');

                // Open the Provide Help Modal after a short delay
                setTimeout(function() {
                    $('#provideHelpModal').modal('show');
                }, 500); // Delay in milliseconds
            });

            $('#closeUserModal').click(function() {

                $('#userModalid').css('display', 'none');
            });
        });
    </script>
@endsection
