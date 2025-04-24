@extends('layouts.app')
@section('title', 'Kampus')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{asset ('images/gambar/iwupaster.jpg')}})">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Detail Kampus</h1>
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
{{-- start content --}}
<section class="tw-section-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 d-flex flex-column align-items-center text-center">
                <!-- Foto -->
                
                <div class="image-container mb-3">
                    <img src="{{ asset('images/gambar/bandung.jpg') }}" alt="Lorem Ipsum" class="img-fluid">
                </div>
      
    
                <!-- Nama dan Status -->
                <div class="section-text fs-18 text-dark-gray mt-3 mb-3">
                    <span class="fw-600 tw-text-gold">Lorem Ipsum
                </div>
            </div>
            
            <!-- Kata Sambutan (Full-width) -->
            <div class="col-12">
                <p class="text-left tw-text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iure ullam dolore quos provident, eveniet blanditiis dolorem quibusdam dicta dolorum alias corporis dolor est voluptatibus ea magni ipsa distinctio? Repellat.</p>
      
            </div>
        </div>
    
            <!-- Fasilitas Kampus -->
            <div class="row mt-5">
                <div class="col-12">
                    <h4 class="text-center fw-700 tw-text-gold">Fasilitas Kampus</h4>
                </div>
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" 
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        
                        <li class="grid-sizer"></li>
                        
                        <!-- Looping Fasilitas -->
                        <li class="grid-item">
                            <div class="tw-bg-[#575757] tw-border tw-border-[#575757] tw-rounded-xl tw-overflow-hidden box-shadow-quadruple-large box-shadow-quadruple-large-hover" 
                                style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('images/gambar/bandung.jpg') }}" alt="Lorem" 
                                            style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                          
                                </div>
                                
                                <div class="card-body p-12 lg-p-10" 
                                    style="display: flex; flex-direction: column; justify-content: flex-start;">
                                    
                                    <span class="fw-600 fs-20 d-inline-block mb-1 tw-text-softgold" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        Ruang Dosen
                                    </span>
                          
                                    
                                    <p class="mb-0 tw-text-gray-300" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id amet debitis numquam nesciunt vitae ipsa quod consequatur vero earum, eius recusandae, velit culpa! Doloremque, ipsam. Commodi dignissimos quis iure ad.
                                    </p>
                          
                                </div>
                            </div>
                        </li>
                        <!-- End Looping Fasilitas -->
                        
                    </ul>
                </div>
            </div>
    </div>
</section>
{{-- end content --}}
@endsection