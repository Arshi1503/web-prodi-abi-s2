@extends('layouts.app')


@section('title', 'Beranda')

@section('content')
        <!-- start cursor -->
        <div class="cursor-page-inner">
            <div class="circle-cursor circle-cursor-inner"></div>
            <div class="circle-cursor circle-cursor-outer"></div>
        </div>
        <!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{asset('images/gambar/iwu-wisuda.jpeg')}})">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Pascasarjana</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Beranda</li>
                                </ul>
                            </div>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="tw-border tw-border-x tw-border-[#2E2E2E] tw-bg-[#2E2E2E]">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 md-mb-9 sm-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <span class="fs-17 d-inline-block fw-500 text-uppercase text-base-color ls-1px mb-15px">Tentang</span>
                        <h1 class="alt-font fw-600 tw-text-softgold ls-minus-2px mb-35px shadow-none" data-shadow-animation="true" data-animation-delay="700">Pascasarjana <span class="text-highlight"><span class="bg-base-color h-10px sm-h-8px bottom-20px md-bottom-17px opacity-5 separator-animation"></span></span></h1>
                        <div class="row">
                            <div class="col-lg-12 mb-25px last-paragraph-no-margin">
                                <p class="w-85 md-w-95 sm-w-100 tw-text-gray-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error vel officiis repellendus dolore porro, quidem incidunt eveniet esse debitis eligendi ab fugiat provident ipsa repellat odio ad labore ut doloribus!Repellendus at quasi ipsum quia! Explicabo quod, aut expedita consectetur libero cum corporis aspernatur? Illum harum nobis facilis modi pariatur obcaecati exercitationem rem odio quis reprehenderit beatae, dolores eveniet perspiciatis?</p>
                                <button type="button" class="tw-text-gray-300  tw-bg-[#BC8947] tw-my-3 hover:tw-bg-[#c9a06b] focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-[#c9a06b] tw-font-medium tw-rounded-full tw-text-sm tw-px-5 tw-py-2.5 tw-text-center tw-me-2 tw-mb-2"><a class="tw-text-gray-300 hover:tw-text-#966d38" href="/tentang-administrasi-bisnis">Lihat Selengkapnya</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 position-relative md-mb-6 sm-mb-50px">
                        <div class="overflow-hidden text-end w-80 ms-auto animation-float" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 0 }'>
                            <img src="images/gambar/test.jpg" alt="" class="w-80 border-radius-5px">
                        </div>
                        <div class="position-absolute bottom-minus-50px w-60 atropos" data-atropos data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 500 }'>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center">
                                        <img class="w-100 border-radius-5px" data-atropos-offset="3" src="images/gambar/dollar2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 bg-dark-gray">
            <div class="container tw-border tw-border-x tw-border-[#232323]">
                <h3 class="tw-text-softgold tw-border-b-4 tw-border-gold tw-py-4">Kenapa Harus Pilih S2 Administrasi Bisnis?</h3>
                <ul class="tw-list-decimal list-inside tw-ps-6 tw-space-y-3 tw-text-gray-300 tw-py-4">
                    <li class="tw-list-item tw-list-disc">Kurikulum terkini yang menggabungkan teori bisnis klasik dan strategi digital modern.</li>
                    <li class="tw-list-item tw-list-disc">Dosen profesional dengan latar belakang akademik dan pengalaman industri yang kuat.</li>
                    <li class="tw-list-item tw-list-disc">Fleksibilitas waktu kuliah yang dirancang untuk profesional yang sedang bekerja.</li>
                    <li class="tw-list-item tw-list-disc">Kesempatan memperluas jaringan dengan sesama mahasiswa dari berbagai latar belakang bisnis.</li>
                    <li class="tw-list-item tw-list-disc">Akses ke berbagai kegiatan seminar, workshop, dan kolaborasi dengan dunia usaha.</li>
                    <li class="tw-list-item tw-list-disc">Prospek karier luas: manajer strategis, konsultan bisnis, akademisi, hingga wirausahawan.</li>
                </ul>
                <h3 class="tw-text-softgold tw-border-b-4 tw-border-gold tw-py-4">Bidang Kompentensi yang Dieksplorasi</h3>
                <ul class="tw-list-inside tw-ps-6 tw-space-y-3 tw-text-gray-300 tw-py-4">
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                </ul>
                <h3 class="tw-text-softgold tw-border-b-4 tw-border-gold tw-py-4">Kosentransi</h3>
                <ul class="list-inside tw-ps-6 tw-space-y-3 tw-text-gray-300 tw-py-4">
                    <li class="tw-list-item tw-list-decimal">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-decimal">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-decimal">Lorem Ipsum</li>
                </ul>
                <h3 class="tw-text-softgold tw-border-b-4 tw-border-gold tw-py-4">Program Sertifikasi</h3>
                <ul class="list-inside tw-ps-6 tw-space-y-3 tw-text-gray-300 tw-py-4">
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                </ul>
                <h3 class="tw-text-softgold tw-border-b-4 tw-border-gold tw-py-4">Prospek Kerja</h3>
                <ul class="tw-list-inside tw-ps-6 tw-space-y-3 tw-text-gray-300 tw-py-4">
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                    <li class="tw-list-item tw-list-disc">Lorem Ipsum</li>
                </ul>
            </div>
        </section>
        
        <!-- end section -->
        <section class="tw-border tw-border-x tw-border-[#2E2E2E] tw-bg-[#2E2E2E]">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 md-mb-9 sm-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <h1 class="alt-font fw-600 tw-text-[#c29459] ls-minus-2px mb-35px shadow-none" data-shadow-animation="true" data-animation-delay="700">Testimoni<span class="text-highlight"><span class="bg-base-color h-10px sm-h-8px bottom-20px md-bottom-17px opacity-5 separator-animation"></span></span></h1>
                        <div class="row">
                            <div class="col-lg-12 mb-25px last-paragraph-no-margin">
                                <p class="w-85 md-w-95 sm-w-100 tw-text-gray-300">Administrasi bisnis adalah ilmu yang mempelajari pengelolaan berbagai aspek dalam perusahaan atau organisasi. Tujuannya adalah untuk menjaga kestabilan dan perkembangan perusahaan, serta memperoleh keuntungan. </p>
                                <button type="button" class="tw-text-white tw-bg-[#BC8947] tw-my-3 hover:tw-bg-[#c9a06b] focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-[#c9a06b] tw-font-medium tw-rounded-full tw-text-sm tw-px-5 tw-py-2.5 tw-text-center tw-me-2 tw-mb-2"><a class="tw-text-white" href="/detail-kata-sambutan">Lihat Selengkapnya</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 position-relative md-mb-6 sm-mb-50px">
                        <div class="overflow-hidden text-end md:tw-w-[80%] ms-auto animation-float" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 0 }'>
                            <img src="images/gambar/foto2.jpg" alt="" class="tw-w-96 border-radius-5px">
                        </div>
                        <div class="position-absolute bottom-minus-50px w-60 atropos" data-atropos data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 500 }'>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container tw-my-20 tw-dark-section">
                <div class="row justify-content-center mb-5 xs-mb-20px">
                    <div class="col-md-12 col-sm-10 text-center">
                        <h4 class="alt-font tw-text-gray-300 fw-500 ls-minus-1px">Bagaimana ? Tetarik ? <a href="https://pmb.iwu.ac.id/" class="text-base-color fw-500 text-decoration-line-bottom-medium">Daftar Sekarang!</a></h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- start section -->
        <!-- end section -->
@endsection