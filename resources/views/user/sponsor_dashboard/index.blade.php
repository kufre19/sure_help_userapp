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
            max-width: 100%;
            height: auto;
            margin: 0 auto;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: brightness(0.2) contrast(5);
        }




        /* .testimonial-author {
                                                font-weight: bold;
                                                text-align: right;
                                                width: 100%;
                                            } */

        .carousel-caption-container {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black background */
            padding: 10px;
        }

        .carousel-caption {
            color: black;
            /* Adjust text color for readability */
            text-align: right;
            /* Align text to the left */
        }

        .testimonial-author {
            font-weight: bold;
        }

        .news-item-anchor {
            text-decoration: none;
            /* Removes underline from links */
            color: inherit;
            /* Inherits text color from parent */
            display: block;
            /* Makes the anchor a block element */
        }

        .news-item-anchor:hover {
            background-color: #f8f9fa;
            /* Optional: background color on hover */
        }

        .news-item {
            padding: 10px;
            /* Adds some padding inside each news item */
        }

        @media (max-width: 768px) {
            .carousel-caption-container {
                position: static;
                /* or 'relative' depending on your layout */
                background: rgba(0, 0, 0, 0.7);
                /* Dark background for legibility */
            }

            .carousel-caption {
                color: #fff;
                /* Light color for the text for legibility */
                font-size: smaller;
                /* Adjust the font size */
                padding: 0.5rem;
                /* Adjust the padding */
                text-align: center;
                /* Center the text */
            }

            .testimonial-author {
                font-size: larger;
                /* Make the author's name stand out */
            }
            
            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                width: 45px;
                /* Increase the size of the icons */
                height: 45px;
                /* Increase the size of the icons */
            }
        }

      
    </style>
@endsection

@section('page_content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-4 text-gray-800">Dashboard</h1> --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-gray-800">Dashboard</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#donationMethodModal">
                Make a Donation
            </button>
        </div>
    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <!-- Broadcast Card -->
        @if ($broadcasts)
            <div class="card mb-4">
                <div class="card-header">
                    Broadcast - {{ $broadcasts->title }}
                </div>
                <div class="card-body">
                    <p><strong>Type:</strong> {{ $broadcasts->broadcast_type }}</p>
                    <p><strong>Message:</strong> {{ $broadcasts->message }}</p>
                    <p><strong>Broadcast By:</strong> {{ $broadcasts->broadcast_by }}</p>
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
                                <div class="carousel-caption-container">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>{{ $testimonial->shortdesc }}</p>
                                        <p class="testimonial-author">- {{ $testimonial->written_by }}</p>
                                    </div>
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
                                <div class="card-body">
                                    @foreach ($newsItems as $newsItem)
                                        <a href="#" class="news-item-anchor" data-toggle="modal"
                                            data-target="#newsModal" data-news-id="{{ $newsItem->id }}">
                                            <div class="news-item mb-4">
                                                <h5>{{ $newsItem->Title }}</h5>
                                                <p>{{ Str::limit($newsItem->shortdesc, 100) }}</p>
                                            </div>
                                        </a>
                                        <hr> <!-- Separator line -->
                                    @endforeach
                                    <!-- Pagination Links -->
                                    {{ $newsItems->links() }}
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

    <!-- Donation Method Modal -->
    <div class="modal fade" id="donationMethodModal" tabindex="-1" role="dialog"
        aria-labelledby="donationMethodModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donationMethodModalLabel">Choose Donation Method</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal"
                        data-target="#donationAmountModal">Method 1</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal"
                        data-target="#bankDetailsModal">Method 2</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Donation Amount Modal -->
    <div class="modal fade" id="donationAmountModal" tabindex="-1" role="dialog"
        aria-labelledby="donationAmountModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donationAmountModalLabel">Enter Donation Amount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="donationAmountForm">
                        <div class="form-group">
                            <label for="donationAmount">Amount</label>
                            <input type="number" class="form-control" id="donationAmount" name="donationAmount"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bank Details Modal -->
    <div class="modal fade" id="bankDetailsModal" tabindex="-1" role="dialog" aria-labelledby="bankDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bankDetailsModalLabel">Bank Details for Donation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Bank Name: XYZ Bank</p>
                    <p>Account Number: 1234567890</p>
                    <!-- Additional bank details here -->
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
                    url: "{{ url('sponsor/dashboard/news/details') }}/" + newsId,
                    type: 'GET',
                    success: function(response) {
                        // Assuming 'response' contains the news details
                        // console.log(response);
                        var modal = $('#newsModal');
                        modal.find('.modal-body').html(response
                            .news_body); // Adjust based on your response structure
                    },
                    error: function() {
                        alert('Error fetching news details');
                    }
                });
            });

            $('#donationAmountForm').submit(function(e) {
                e.preventDefault();
                var amount = $('#donationAmount').val();
                // Placeholder for submission logic
                console.log("Donation Amount: " + amount);
                // Implement your submission logic here
                $('#donationAmountModal').modal('hide');
            });
        });
    </script>
@endsection
