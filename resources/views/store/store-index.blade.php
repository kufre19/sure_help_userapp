@extends('layouts.store.app')


@section('main-content')
    <main>
        <div class="container">

           
            <!-- Products -->
            <section class="pt-5">
                <div class="text-center">
                    @if (session()->has("success"))
                    <div class="alert alert-success" role="alert">
                        {{session()->get("success")}}
                    </div>
                @endif
                    <div class="row">

                        @if ($items->count() > 0)
                            @foreach ($items as $item)
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card">
                                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            {{-- change it later to use asset variable --}}
                                            <img src="{{$item->item_image}}"
                                                class="w-100" />
                                            <a href="#!">
                                                <div class="mask">

                                                </div>
                                                <div class="hover-overlay">
                                                    <div class="mask"
                                                        style="background-color: rgba(251, 251, 251, 0.15);">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="" class="text-reset">
                                                <h5 class="card-title mb-2"> {{$item->item_name}}</h5>
                                            </a>
                                            <a href="" class="text-reset ">
                                                <p>{{$item->item_category}}</p>
                                            </a>
                                            <a href="{{url('dashboard/wishlist/add/item')."/".$item->id}}"><i class="fa fa-heart"></i>Add to wish list</a>
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

            <!-- Pagination -->
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                <ul class="pagination">
                    {{$items->links()}}

                </ul>
            </nav>
            <!-- Pagination -->
        </div>
    </main>
@endsection
