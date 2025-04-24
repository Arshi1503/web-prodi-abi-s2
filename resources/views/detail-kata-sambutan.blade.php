@extends('layouts.app')
@section('title', 'Kata Sambutan')

@section('content')

<!-- start page title -->
<section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{asset ('images/gambar/iwupaster.jpg')}})">
    <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Kata Sambutan</h1>
                    </div>
                    <!-- start breadcrumb -->
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
    <section>
        <!-- start section -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex flex-column align-items-center text-center">
                    <!-- Foto -->
                    <div class="image-container mb-3">
                        <img src="{{ asset('images/gambar/foto2.jpg') }}" alt="Gambar" class="img-fluid">
                    </div>

                    <!-- Nama dan Status -->
                    <div class="section-text fs-18 text-dark-gray mt-3 mb-3">
                        <span class="fw-600">Lorem ipsum</span>, Ketua Guild
                    </div>
                </div>
                
                <!-- Kata Sambutan (Full-width) -->
                <div class="col-12">
                    <p class="section-text text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ad omnis, eaque ex nam fuga rem saepe accusantium deleniti aliquam earum eius nihil quam consequuntur animi iste suscipit nesciunt vel?</p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection