@extends('layouts.app')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/slider-adds.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/slider-1.png') }}" alt="Landing Image">
            </div>
        </div>
    </div>

    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  active" style="height: 200px; overflow: hidden">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 1" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="{{ asset('img/bb.jpg') }}" alt="slide 1">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 "  style="height: 195px; overflow: hidden">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 3" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="{{ asset('img/athlete.jpg') }}" alt="slide 2">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 4" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="{{ asset('img/rally.jpg') }}" alt="slide 3">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 5" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="{{ asset('img/ball.jpg') }}" alt="slide 4">
                        </a>
                    </div>
                </div>
            </div>
            {{--<div class="carousel-item col-md-3 ">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-thumbnail">--}}
                        {{--<a href="#" title="image 6" class="thumb">--}}
                            {{--<img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="carousel-item col-md-3 ">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-thumbnail">--}}
                        {{--<a href="#" title="image 7" class="thumb">--}}
                            {{--<img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="carousel-item col-md-3 ">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-thumbnail">--}}
                        {{--<a href="#" title="image 8" class="thumb">--}}
                            {{--<img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="carousel-item col-md-3">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-thumbnail">--}}
                        {{--<a href="#" title="image 2" class="thumb">--}}
                            {{--<img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        </div>
        {{--<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">--}}
            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">--}}
            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}

        <div style="margin-left: 1.2%; margin-top: 2%;">
            <h5 style="color: white;">
                Upcoming
            </h5>
        </div>

        <div class="card-group" style="margin: 1%;">
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/pool.jpg') }}" style="height: 250px; overflow: hidden" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Swimming Championship</h5>
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    <p class="card-text"><small class="text-muted">4th Dec - Kasarani</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/boot.jpg') }}" style="height: 250px; overflow: hidden" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Rugby 7's</h5>
                    {{--<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>--}}
                    <p class="card-text"><small class="text-muted">8th Dec - Nakuru</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/bike.jpg') }}" style="height: 250px; overflow: hidden" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Bike Race Event</h5>
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
                    <p class="card-text"><small class="text-muted">7th Jan 2019 - Ngong Hills </small></p>
                </div>
            </div>
        </div>

        <div style="margin-left: 1.2%; margin-top: 2%;">
            <h5 style="color: white;">
                Featured
            </h5>
        </div>

        <div class="card-group" style="margin: 1%;">
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/water.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Diani Deep See Diving</h5>
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    <p class="card-text"><small class="text-muted">Diani Resort - Malindi</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/athlete-bike.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nairobi Bikers Association</h5>
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
                    <p class="card-text"><small class="text-muted">Nairobi - Thika race - 10th Dec</small></p>
                </div>
            </div>
        </div>


        <div style="margin-left: 1.2%; margin-top: 2%;">
            <h5 style="color: white;">
                Sport Types
            </h5>
        </div>

        <div class="card-group" style="margin: 1%;">
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/ball.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    {{--<h5 class="card-title">Soccer</h5>--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/rally.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    {{--<h5 class="card-title">Rally</h5>--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/bb.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    {{--<h5 class="card-title">Basket Ball</h5>--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/pool.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    {{--<h5 class="card-title">Swimming</h5>--}}
                    {{--<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>--}}
                    {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/athlete-bike.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    {{--<h5 class="card-title">Cycling</h5>--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
                    {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>
        </div>


    </div>
    </div>
    @push('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    {{--<script src="{{ asset('js/slider-adds.js') }}"></script>--}}
    @endpush
@endsection
