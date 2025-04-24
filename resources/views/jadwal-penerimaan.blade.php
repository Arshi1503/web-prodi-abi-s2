@extends('layouts.app')
@section('title', 'Jadwal Penerimaan')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/gambar/iwupaster.jpg)">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Jadwal Penerimaan</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Pendaftaran</li>
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
            {{-- start card --}}
            <div class="tw-card tw-mb-12">
                <div>
                    <h3 class="tw-card-title">Jadwal Penerimaan</h3>
                    <p class="tw-card-subtitle">Penerimaan mahasiswa baru untuk Program Studi Teknik Informatika Universitas Wanita Internasional dilakukan secara rutin setiap tahun dengan jadwal sebagai berikut: </p>
                    <div class="tw-overflow-x-auto">
                        <div class="tw-overflow-x-auto">
                            <table class="tw-table">
                              <thead class="tw-table-head">
                                <tr>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center tw-w-1/5">Keterangan</th>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Tanggal</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    Tes</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    15 Maret 2025</td>
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    Masa Orientasi</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    21 April 2025</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                </div>
            </div>
            {{-- End Card --}}
    </section>    
{{-- end card --}}
@endsection