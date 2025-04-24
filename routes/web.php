<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tentang-administrasi-bisnis', function(){
    return view('tentang-administrasi-bisnis');
});

Route::get('/tentang-visi-misi-tujuan', function (){
    return view('tentang-visi-misi-tujuan');
});

Route::get('/tentang-struktur-organisasi', function(){
    return view('tentang-struktur-organisasi');
});

Route::get('/tentang-fasilitas', function(){ 
    return view('tentang-fasilitas');
});

Route::get('/tentang-dosen', function(){
    return view('tentang-dosen');
});

Route::get('/tentang-akreditasi', function(){
    return view('tentang-akreditasi');
});

Route::get('/tentang-karir', function(){
    return view('tentang-karir');
});

Route::get('/akademi-kurikulum', function(){
    return view('akademi-kurikulum');
});

Route::get('/akademi-profil',function(){
    return view('akademi-profil');
});

Route::get('/publikasi-artikel', function(){
    return view('publikasi-artikel');
});

Route::get('/publikasi-berita', function(){
    return view('publikasi-berita');
});

Route::get('/publikasi-kegiatan', function(){
    return view('publikasi-kegiatan');
});

Route::get('/jadwal-penerimaan', function(){
    return view('jadwal-penerimaan');
});

Route::get('/persyaratan-masuk', function(){
   return view('persyaratan-masuk'); 
});

Route::get('/detail-artikel/1', function(){
    return view('detail-artikel');
});

Route::get('/detail-berita/1', function(){
    return view('detail-berita');
});

Route::get('/detail-kegiatan/1', function(){
    return view('detail-kegiatan');
});

Route::get('/detail-fasilitas/1', function(){
    return view('detail-fasilitas');
});

Route::get('/detail-kata-sambutan', function(){
    return view('detail-kata-sambutan');
});

Route::get('/detail-dosen/1', function(){
   return view('detail-dosen'); 
});