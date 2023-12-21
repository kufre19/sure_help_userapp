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

        .carousel-image {
            width: auto;
            /* Adjust width as needed */
            max-height: 300px;
            /* Adjust height as needed */
            margin: 0 auto;
            /* Center the image */
        }
    </style>
@endsection

@section('page_content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <!-- Broadcast Card -->
        @if ($broadcasts)
            <div class="card mb-4">
                <div class="card-header">
                    Broadcast
                </div>
                <div class="card-body">
                    <p>{{ $broadcasts->message }}</p>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <!-- Testimonial Carousel -->
                <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($testimonials as $index => $testimonial)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img class="carousel-image" src="{{ $testimonial->imageurl }}"
                                    alt="Slide {{ $index }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $testimonial->written_by }}</h5>
                                    <p>{{ $testimonial->shortdesc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>

        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <!-- News Feed Card -->
                <!-- News Feed Card -->
                <div class="card">
                    <div class="card-header">
                        Latest News
                    </div>
                    @if ($newsItems)
                        <div class="card-body">
                            @foreach ($newsItems as $newsItem)
                                <div class="news-item mb-4" data-toggle="modal" data-target="#newsModal"
                                    data-news-id="{{ $newsItem->id }}">
                                    <h5>{{ $newsItem->title }}</h5>
                                    <p>{{ Str::limit($newsItem->content, 100) }}</p>
                                </div>
                            @endforeach
                            <!-- Pagination Links -->
                            {{ $newsItems->links() }}
                        </div>
                    @else
                        <div class="card-body">
                            <p>Check in later for news feeds</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>


    </div>


    {{-- modals start --}}
    <!-- News Modal -->
    <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel">News Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- News content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    {{-- modals end --}}
@endsection


@section('extraJS')
    <script>
        $(document).ready(function() {
            $('#newsModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var newsId = button.data('news-id');

                // AJAX request to fetch news details
                $.ajax({
                    url: "{{ url('fetch/news/details') }}/" + newsId,
                    type: 'GET',
                    success: function(response) {
                        // Assuming 'response' contains the news details
                        var modal = $('#newsModal');
                        modal.find('.modal-body').html(response
                        .content); // Adjust based on your response structure
                    },
                    error: function() {
                        alert('Error fetching news details');
                    }
                });
            });
        });
    </script>
@endsection
