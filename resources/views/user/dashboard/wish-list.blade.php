@extends('layouts.user.dashboard.custom.app')
@section('extraCss')
@endsection

@section('page_content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">My Wish List</h1>

    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        @if (session()->has('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('danger') }}
            </div>
        @endif
        <div class="row">

            @if ($wishes->count() > 0)
                @foreach ($wishes as $wish)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                {{-- change it later to use asset variable --}}
                                <img src="{{ $wish->wishedItem->item_image }}" class="w-100" />
                                <a href="#!">
                                    <div class="mask">

                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-2"> {{ $wish->wishedItem->item_name }}</h5>
                                </a>
                                <a href="" class="text-reset ">
                                    <p>{{ $wish->wishedItem->item_category }}</p>
                                </a>
                                <a href="javascript:void(0)" class="remove-from-wishlist" data-wish-id="{{ $wish->id }}">
                                    <i class="fa fa-trash"></i>remove from list
                                </a>
                            </div>
                            @if ($wish->admin_comment != null)
                                <div class="card-footer">
                                    <p>Message: {{$wish->admin_comment}}</p>

                                </div>
                            @endif


                        </div>
                    </div>
                @endforeach
            @else
                <h4>No Items On Your Wish List, Head to the free Store to get items!</h4>
            @endif



        </div>





    </div>
@endsection


@section('extraJS')
<script>
    $(document).ready(function() {
        $('.remove-from-wishlist').click(function(e) {
            var wishId = $(this).data('wish-id');
            $.ajax({
                url: '{{ url("dashboard/wishlist/remove") }}/' + wishId,
                type: 'GET',
                success: function(response) {
                    Swal.fire(
                        'Removed!',
                        'Item has been removed from your wishlist.',
                        'success'
                    );
                    // Remove the item from the UI
                    $('a[data-wish-id="' + wishId + '"]').closest('.col-lg-4').remove();
                },
                error: function(error) {
                    Swal.fire(
                        'Error!',
                        'An error occurred while removing the item.',
                        'error'
                    );
                }
            });
        });
    });
</script>
@endsection

