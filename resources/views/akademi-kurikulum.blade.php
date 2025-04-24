@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/gambar/iwupaster.jpg)">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Kurikulum</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Akademi</li>
                                </ul>
                            </div>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end page title -->
{{-- start card --}}
        <section>
            <div class="tw-space-y-20">
                <div class="tw-card">
                    <div>
                        <h3 class="tw-card-title">Kurikulum Program Studi Teknik Informatika</h3>
                        <p class="tw-card-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam reprehenderit explicabo quas, atque esse architecto eaque quis exercitationem dolore pariatur eveniet? Libero alias voluptates repellat cum neque possimus, repellendus vitae.
                        Optio magni accusantium eveniet eos nulla mollitia impedit culpa possimus sunt. Repellat eos nam delectus facilis, ab, incidunt reiciendis, quibusdam quod temporibus doloribus odit commodi! Rem dolor quisquam accusamus laboriosam.
                        Aperiam iure ullam cupiditate laboriosam nihil ut tempora quaerat explicabo quibusdam corporis natus minus illum itaque tenetur quas recusandae, nisi consequatur temporibus quos. Asperiores harum enim ratione totam molestiae inventore!</p>
                    </div>
                </div>
                <div class="tw-card">
                    <div>
                        <h3 class="tw-card-title">Struktur Kurikulum</h3>
                        <p class="tw-card-subtitle tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum ratione odio velit ea, recusandae sint obcaecati laborum porro sed deserunt! Veritatis perspiciatis repellendus sed id similique? Voluptate qui saepe nesciunt.
                        Id libero ea asperiores sequi repellendus obcaecati iste, blanditiis quia corrupti veniam rem beatae excepturi assumenda voluptatum nesciunt quos fugiat perspiciatis non nihil rerum eius consequuntur. Quasi reiciendis non cumque.
                        Iste laborum cum odio asperiores consequuntur sunt temporibus dolor ad, voluptatum quibusdam, dolorum ex quo fugiat, repellendus et voluptatem. Dolor consequatur quod mollitia ipsum culpa doloremque modi porro quos sunt.</p>
                        {{-- Start Table Nav --}}
                        <div class="tw-tab-nav tw-flex tw-flex-wrap tw-gap-2 tw-justify-center tw-p-2 tw-rounded-md">
                            <button class="tab-button tw-tab-nav-active" data-tab="semester-1"> Semester 1</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-2"> Semester 2</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-3"> Semester 3</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-4"> Semester 4</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-5"> Semester 5</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-6"> Semester 6</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-7"> Semester 7</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-8"> Semester 8</button>
                        </div>
                        {{-- End Table Nav --}}
                        {{-- Start Table --}}
                        <div class="tab-content tw-p-4" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-1">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}
                        {{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-2">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> C112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> B112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> D112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-3">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-4">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-5">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-6">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-7">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-8">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}
                </div>
                
            </div>
            {{-- Start Card --}}
            <div class="tw-card" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h3 class="tw-card-title">Standar Kompentensi Lulusan</h3>
                <p class="tw-card-subtitle"> Kompetensi lulusan Program Studi Teknik Informatika dirancang untuk mencerminkan visi, misi, tujuan, dan sasaran program studi. Kompetensi ini mencakup aspek utama yang mencirikan bidang teknologi informasi dan keunggulan program studi, serta aspek tambahan yang memperkaya keahlian lulusan. Selain itu, kompetensi ini dirumuskan sesuai dengan capaian pembelajaran yang mengacu pada Kerangka Kualifikasi Nasional Indonesia (KKNI), sehingga lulusan memiliki keterampilan dan pengetahuan yang relevan dengan perkembangan industri dan kebutuhan masyarakat. </p>
                {{-- Start Table--}}
                <div class="tw-p-4">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                          <thead class="tw-table-head">
                            <tr>
                              <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Deskripsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="tw-table-row">
                                <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis expedita voluptatum repudiandae consequuntur! Veritatis soluta placeat sint impedit necessitatibus, dicta labore architecto sed reiciendis. Nam ipsa commodi neque porro repellendus.</td>
                            </tr>
                            <tr class="tw-table-row last:tw-border-0">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">2</td>
                              <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis expedita voluptatum repudiandae consequuntur! Veritatis soluta placeat sint impedit necessitatibus, dicta labore architecto sed reiciendis. Nam ipsa commodi neque porro repellendus.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                {{-- End Table--}}
                {{-- End Card --}}
                {{-- Start Card --}}
                <div class="tw-card" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="tw-card-title">Capaian Pembelajaran Lulusan (CPL)</h3>
                    <p class="tw-card-subtitle">Capaian Pembelajaran Lulusan (CPL) Program Studi Teknik Informatika Universitas Wanita Internasional dirumuskan untuk memastikan bahwa lulusan memiliki kemampuan yang sesuai dengan standar nasional dan internasional. Capaian ini mencakup aspek sikap, pengetahuan, keterampilan umum, dan keterampilan khusus yang diperlukan untuk berkembang dalam bidang teknologi informasi serta berkontribusi pada masyarakat dan industri digital.</p>
                    {{-- Start Table--}}
                    <div class="tw-p-4">
                        <div class="tw-overflow-x-auto">
                            <table class="tw-table">
                              <thead class="tw-table-head">
                                <tr>
                                  <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Deskripsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis expedita voluptatum repudiandae consequuntur! Veritatis soluta placeat sint impedit necessitatibus, dicta labore architecto sed reiciendis. Nam ipsa commodi neque porro repellendus.</td>
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                    Lorem ipsum</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        {{-- End Table --}}
                        {{-- Start Tab Nav --}}
                        <div class="tw-tab-nav tw-flex tw-flex-wrap tw-gap-2 tw-justify-center tw-p-2 tw-rounded-md">
                            <button class="tab-button tw-tab-nav-active" data-tab="sikap">Sikap</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="pengetahuan">Pengetahuan</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="keterampilan-umum">Keterampilan Umum</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="keterampilan-khusus">Keterampilan Khusus</button>
                        </div>
                        {{-- End Table Nav --}}
                        {{-- Start Tab Content --}}
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4" id="sikap" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="pengetahuan">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- End Table Content --}}
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="keterampilan-umum">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- End Table Content --}}
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="keterampilan-khusus">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- End Table Content --}}
                    <p class="tw-card-subtitle"> Lulusan Program Studi Teknik Informatika diharapkan mampu mencapai kompetensi sebagai berikut: </p>
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                            <thead class="tw-table-head">
                                <tr>
                                    <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                                    <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                    </td>
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    {{-- End Card --}}
                    {{-- Start Card --}}
                <div class="tw-card">
                    <h3 class="tw-card-title">Sasaran Kualitas Dosen, Mahasiswa dan Lulusan</h3>
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                            <thead class="tw-table-head">
                                <tr>
                                    <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                                    <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                    </td>
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo quod magni quam, eos qui pariatur voluptates voluptatibus obcaecati blanditiis similique sunt ratione dolorum, deleniti quibusdam molestias architecto, nobis adipisci?
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    {{-- End Card --}}
                {{-- Start Card --}}
                <div class="tw-card">
                    <h3 class="tw-card-title">Tracer Study</h3>
                    <p class="tw-card-subtitle tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque voluptas beatae nostrum rerum vero, modi autem totam similique ducimus voluptatem tenetur magnam iste recusandae corporis explicabo, cupiditate quo perspiciatis?</p>
                </div>

            </div>
    </section>
@endsection