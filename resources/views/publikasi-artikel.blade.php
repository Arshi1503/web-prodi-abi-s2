@extends('layouts.app')
@section('title', 'Publikasi')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/gambar/iwupaster.jpg)">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Artikel</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Publikasi</li>
                                </ul>
                            </div>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end page title -->
{{-- start grid news--}}
    <section id="berita-terbaru" class="tw-section-dark overflow-hidden position-relative overlap-height pb-5 md-pb-7 xs-pb-50px">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center align-items-center text-center text-md-start">
                <div class="text-center" style="margin-top: 50px;">
                    <h4 class="tw-text-gold fw-700 tw-mb-2" data-aos="fade-down" data-aos-duration="1000">
                        Artikel
                    </h4>
                </div>                    
            </div>                
            <div class="row">
            <div class="col-12">
                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog list -->
                    <li class="grid-item">
                        <div class="tw-bg-[#575757] card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="blog-image tw-bg-[#575757] tw-border tw-border-[#575757]" style="height: 200px; overflow: hidden;">
                                <a href="#" class="d-block">
                                    <img src="/images/gambar/bandung.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                </a>
                            </div>
                            <div class="tw-bg-[#575757] card-body  p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                <a href="#" 
                                class="mb-15px fw-600 fs-20 tw-text-softgold d-inline-block" 
                                style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                    {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                </a>
                                <p class="tw-text-gray-200"style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                    {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                </p>
                                <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                    <div class="me-auto">
                                        <span class="blog-date d-inline-block fw-600 tw-text-gold">
                                            15 Maret 2025
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end blog list -->
                    <li class="grid-item">
                        <div class="tw-bg-[#575757] card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="blog-image tw-bg-[#575757] tw-border tw-border-[#575757]" style="height: 200px; overflow: hidden;">
                                <a href="#" class="d-block">
                                    <img src="/images/gambar/bandung.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                </a>
                            </div>
                            <div class="tw-bg-[#575757] card-body  p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                <a href="#" 
                                class="mb-15px fw-600 fs-20 tw-text-softgold d-inline-block" 
                                style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                    {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                </a>
                                <p class="tw-text-gray-200"style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                    {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                </p>
                                <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                    <div class="me-auto">
                                        <span class="blog-date d-inline-block fw-600 tw-text-gold">
                                            15 Maret 2025
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="grid-item">
                        <div class="tw-bg-[#575757] card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="blog-image tw-bg-[#575757] tw-border tw-border-[#575757]" style="height: 200px; overflow: hidden;">
                                <a href="#" class="d-block">
                                    <img src="/images/gambar/bandung.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                </a>
                            </div>
                            <div class="tw-bg-[#575757] card-body  p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                <a href="#" 
                                class="mb-15px fw-600 fs-20 tw-text-softgold d-inline-block" 
                                style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                    {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                </a>
                                <p class="tw-text-gray-200"style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                    {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                </p>
                                <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                    <div class="me-auto">
                                        <span class="blog-date d-inline-block fw-600 tw-text-gold">
                                            15 Maret 2025
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
{{-- end grid news --}}
@endsection