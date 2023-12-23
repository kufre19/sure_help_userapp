@extends('layouts.user.dashboard.custom.app')
@section('extraCss')
@endsection

@section('page_content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">My Inbox</h1>

    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Inbox</h3>

                        {{-- <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search Messages">
                                <div class="input-group-append">
                                    <div class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="mailbox-controls">
                            <!-- Check all button -->


                            <!-- /.btn-group -->
                            {{-- <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-sync-alt"></i>
                            </button> --}}
                            {{-- <div class="float-right">
                                1-50/200
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                            </div> --}}
                            <!-- /.float-right -->
                        </div>
                        <!-- ... existing HTML ... -->
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    @foreach ($inboxMessages as $message)
                                        <tr class="{{ $message->has_read == 'false' ? 'font-weight-bold' : '' }}">
                                            <td class="mailbox-name">
                                                <a href="#" class="open-message-modal" data-message-id="{{ $message->id }}">{{ $message->sender }}</a>
                                            </td>
                                            <td class="mailbox-subject">{{ Str::limit($message->message, 50) }}</td>
                                            <td class="mailbox-date">{{ $message->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Pagination -->
                            {{ $inboxMessages->links() }}
                        </div>
                        <!-- ... -->

                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
            <!-- /.card -->

        </div>


    </div>

    {{-- modals --}}
    <!-- Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Message Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Message content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

@endsection


@section('extraJS')
<script>
    $(document).ready(function() {
        $('.open-message-modal').click(function() {
            var messageId = $(this).data('message-id');

            // AJAX request to fetch message data
            $.ajax({
                type: 'GET',
                url: "{{ url('sponsor/dashboard/inbox/message') }}" + "/" + messageId,
                success: function(message) {
                    // Populate the modal with message data
                    var modal = $('#messageModal');
                    modal.find('.modal-body').html(message.message); // Adjust based on your response structure
                    modal.modal('show');
                },
                error: function() {
                    alert('Error fetching message details');
                }
            });
        });
    });
</script>

@endsection
