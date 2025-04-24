@extends('layouts.app')
@section('title', 'Berita')

@section('content')

<!-- start page title -->
<section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{asset ('images/gambar/iwupaster.jpg')}})">
    <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Detail Berita</h1>
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
    <section class="tw-section-dark">
        <!-- start section -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex flex-column align-items-center text-center">
                    <!-- Foto -->
                    <div class="image-container mb-3">
                        <img src="/images/gambar/bandung.jpg" alt="" class="img-fluid">
                    </div>

                    <!-- Nama dan Status -->
                    <div class="fs-18 tw-text-softgold mt-3 mb-3">
                        <span class="fw-600">15 Maret 2005</span>
                    </div>

                    <!-- Kata Sambutan (Full-width) -->
                    <div class="col-12">
                        <p class="tw-text-2xl text-left tw-text-gold">Pencapaian Mahasiswa Teknik Informatika pada Kompetisi Nasional Teknologi</p>
                    </div>
                </div>
                    <!-- Kata Sambutan (Full-width) -->
                    <div class="col-12">
                        <p class="text-left tw-text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim, nesciunt rerum? Sunt numquam ut distinctio laboriosam dolores porro, pariatur corporis harum, iure, recusandae quibusdam. Neque veniam sapiente debitis natus doloribus.</p>
                    </div>
            </div>
        </div>
    </section>
@endsection