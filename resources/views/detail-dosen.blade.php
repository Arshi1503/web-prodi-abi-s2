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
<section>
    <div class="container">
        <div class="row">
            <!-- Profil Dosen -->
            <div class="col-md-4 text-center p-3 border rounded shadow-sm">
                <img src="{{ asset('images/gambar/foto2.jpg') }}" class="img-fluid rounded-circle tw-mx-auto tw-my-auto" width="150" alt="Foto Dosen">
                <h5 class="mt-2">Lorem Ipsum Dolor</h5>
                <h6>Ketua Guild</h6>
                <p><i class="bi bi-person"></i> 405019203</p>
                <p><i class="bi bi-envelope"></i> sririani@iwu.ac.id</p>
                <a href="#" class="btn btn-secondary w-100 mb-2">Google Scholar</a>
                <a href="#" class="btn btn-warning w-100">Scopus</a>
            </div>
            
            <!-- Mata Kuliah dan Jadwal -->
            <div class="col-md-8">
                <h4>Mata Kuliah yang Diampu dan Jadwal Perkuliahan</h4>
                <table class="table table-bordered mt-3">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Ruang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Biologi Sel</td>
                            <td>Sabtu</td>
                            <td>07.00-09.30</td>
                            <td>R. 201 Kampus 1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Struktur dan Perkembangan Tumbuhan</td>
                            <td>Rabu</td>
                            <td>12.50-15.20</td>
                            <td>R. 203 Kampus 1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Komputer Aplikasi IT III (Bioinformatika I)</td>
                            <td>Senin</td>
                            <td>12.50-15.20</td>
                            <td>R. 108 Kampus 1</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Biostatistika</td>
                            <td>Senin</td>
                            <td>07.00-09.30</td>
                            <td>R. 201 Kampus 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</section>
{{-- end content --}}
@endsection