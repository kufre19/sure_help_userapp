@extends('layouts.web.app')

@section('main-content')
    <!-- ======================header started====================== -->



    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>Free Store</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Free Store</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="_pl_rt">
        <div class="container">
            <div class="row">
                @if ($items->count() > 0)
                    @foreach ($items as $item)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card shadow">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    {{-- change it later to use asset variable --}}
                                    <img src="{{ $item->item_image }}" class="w-100" />
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
                                        <h5 class="card-title mb-2"> {{ $item->item_name }}</h5>
                                    </a>
                                    <a href="" class="text-reset ">
                                        <p>{{ $item->item_category }}</p>
                                    </a>
                                    <a href="javascript:void(0)" class="add-to-wishlist"
                                        data-item-id="{{ $item->id }}"><i class="fa fa-heart"></i>Add to wish list</a>

                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <p>
                        Sorry no item found in the free shop currently!
                    </p>
                @endif
            </div>
            <div class="row">
                <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                    <ul class="pagination">
                        {{ $items->links() }}

                    </ul>
                </nav>
            </div>
        </div>
    </section>

@section('extra-js')
    <script>
        $(document).ready(function() {
            $('.add-to-wishlist').click(function(e) {
                var itemId = $(this).data('item-id');
                $.ajax({
                    // ... existing AJAX setup ...
                    url: '{{ url('dashboard/wishlist/add/item') }}/' + itemId,
                    type: 'GET',
                    success: function(response) {
                        Swal.fire({
                            title: response.status === 'success' ? 'Success!' :
                                response.status,
                            text: response.message,
                            icon: response.status,
                            timer: 3000,
                            timerProgressBar: true,
                            toast: true,
                            showConfirmButton: false,
                            padding: '1em'
                        });
                    },
                    error: function(error) {
                        // You can extract error message from error response if your backend sends it
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while adding to wishlist.',
                            icon: 'error',
                            timer: 3000,
                            timerProgressBar: true,
                            toast: true,
                            showConfirmButton: false,
                            padding: '1em'
                        });
                    }
                });
            });
        });
    </script>
@endsection



@endsection
