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
                            <div class="card">
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
                                    <a href="{{ url('dashboard/wishlist/add/item') . '/' . $item->id }}"><i
                                            class="fa fa-heart"></i>Add to wish list</a>
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
        </div>
    </section>


@endsection
