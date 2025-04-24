@extends('layouts.app')
@section('title', 'Dosen')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{asset ('images/gambar/iwupaster.jpg')}})">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Dosen</h1>
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
        <div class="row">
            <!-- Profil Dosen -->
            <div class="col-md-4 text-center p-3 tw-border tw-rounded-xl tw-border-[#424242]">
                <img src="{{ asset('images/gambar/foto2.jpg') }}" class="img-fluid rounded-circle tw-mx-auto tw-my-auto" width="150" alt="Foto Dosen">
                <h5 class="mt-2 tw-text-softgold">Lorem Ipsum Dolor</h5>
                <h6 class="tw-text-gold">Ketua Guild</h6>
                <p class="tw-text-gray-300"><i class="bi bi-person"></i> 405019203</p>
                <p class="tw-text-gray-300"><i class="bi bi-envelope"></i> sririani@iwu.ac.id</p>
                <a href="#" class="btn btn-secondary w-100 mb-2">Google Scholar</a>
                <a href="#" class="btn btn-warning w-100">Scopus</a>
            </div>

            <!-- Mata Kuliah dan Jadwal -->
            <div class="col-md-8">
                <div class="tw-overflow-x-auto tw-card tw-rounded-xl tw-shadow-md tw-p-4">
                    <h6 class="tw-text-softgold tw-font-semibold tw-mb-4">Mata Kuliah yang Diampu dan Jadwal Perkuliahan</h6>
                    <table class="tw-w-full tw-text-sm tw-text-left tw-text-gray-700 tw-border-collapse">
                        <thead class="tw-bg-[#d9d9d9] tw-text-[#3e3e3e]">
                            <tr>
                                <th class="tw-px-4 tw-py-3 tw-border tw-border-[#c0c0c0]">No</th>
                                <th class="tw-px-4 tw-py-3 tw-border tw-border-[#c0c0c0]">Nama Mata Kuliah</th>
                                <th class="tw-px-4 tw-py-3 tw-border tw-border-[#c0c0c0]">Hari</th>
                                <th class="tw-px-4 tw-py-3 tw-border tw-border-[#c0c0c0]">Waktu</th>
                                <th class="tw-px-4 tw-py-3 tw-border tw-border-[#c0c0c0]">Ruang</th>
                            </tr>
                        </thead>
                        <tbody class="tw-bg-white tw-text-[#333]">
                            <tr class="hover:tw-bg-[#fff9e6]">
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">1</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">Biologi Sel</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">Sabtu</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">07.00-09.30</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">R. 201 Kampus 1</td>
                            </tr>
                            <tr class="hover:tw-bg-[#fff9e6]">
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">1</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">Biologi Sel</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">Sabtu</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">07.00-09.30</td>
                                <td class="tw-px-4 tw-py-3 tw-border tw-border-[#e0e0e0]">R. 201 Kampus 1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end content --}}

@endsection