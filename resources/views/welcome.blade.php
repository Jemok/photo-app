@extends('layouts.app')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/slider-adds.css') }}">
@endsection

@section('content')
    <div class="container">
        <a href='http://localhost:8000/collection-link/ec473450-bd6c-11e8-a5f5-c7bd9810f1d3/124' style='background-color: #4CAF50; border: none; color: white; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block;'><img src='http://localhost:8000/images/mpesa-logo.png'> Click to Pay Testing Button</a>            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/slider-1.png') }}" alt="Landing Image">
                </div>
            </div>
        </div>

        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-3  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 3" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 4" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 5" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 6" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 8" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 2" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    @push('scripts')
    <script src="{{ asset('js/slider-adds.js') }}"></script>
    @endpush
@endsection
