@extends('layouts.app')
@section('assets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="{{ asset('css/compact-gallery.css') }}">
@endsection
@section('content')
    <section class="gallery-block grid-gallery">
        <div class="container">
            <div class="heading">
                <h2>Image Gallery</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image1.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image1.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image1.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image1.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image1.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image1.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image1.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image1.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image2.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image2.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image3.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image3.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image4.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image1.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image5.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image5.jpg') }}">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="{{ asset('img/gallery/image6.jpg') }}">
                        <img class="img-fluid image scale-on-hover" src="{{ asset('img/gallery/image6.jpg') }}">
                    </a>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
    </script>
    @endpush
@endsection
