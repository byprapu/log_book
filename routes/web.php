<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view ('login', [
        "title" => "Login"
    ]);
});

Route::get('/absen', function () {
    return view ('absen', [
        "title" => "Absensi"
    ]);
});

Route::get('/habsensi', function () {
    return view ('habsensi', [
        "title" => "Absensi"
    ]);
});

Route::get('/profil', function () {
    return view ('profil', [
        "title" => "Profil"
    ]);
});

Route::get('/laporan', function () {
    return view ('laporan', [
        "title" => "Laporan"
    ]);
});

Route::get('/logout', function () {
    return view ('logout', [
        "title" => "Logout"
    ]);
});

Route::get('/home', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/registrasi', function () {
    return view ('registrasi', [
        "title" => "Registrasi"
    ]);
});

Route::get('/admin', function () {
    return view ('admin', [
        "title" => "Admin"
    ]);
});

Route::get('/dmahasiswa', function () {
    return view ('dmahasiswa', [
        "title" => "Data Mahasiswa"
    ]);
});

Route::get('/dabsensi', function () {
    return view ('dabsensi', [
        "title" => "Data Absensi"
    ]);
});

Route::get('/dkegiatan', function () {
    return view ('dkegiatan', [
        "title" => "Data Kegiatan"
    ]);
});

Route::get('/dpembimbing', function () {
    return view ('dpembimbing', [
        "title" => "Data Pembimbing"
    ]);
});

Route::get('/dnilai', function () {
    return view ('dnilai', [
        "title" => "Data Nilai"
    ]);
});

Route::get('/pembimbing', function () {
    return view ('pembimbing', [
        "title" => "Pembimbing"
    ]);
});

Route::get('/project', function () {
    return view ('project', [
        "title" => "Project"
    ]);
});

Route::get('/nilai', function () {
    return view ('nilai', [
        "title" => "Nilai"
    ]);
});

Route::get('/dpmahasiswa', function () {
    return view ('dpmahasiswa', [
        "title" => "Mahasiswa"
    ]);
});

Route::get('/dpabsensi', function () {
    return view ('dpabsensi', [
        "title" => "Absensi"
    ]);
});

Route::get('/dpproject', function () {
    return view ('dpproject', [
        "title" => "Project Magang"
    ]);
});

Route::get('/dpnilai', function () {
    return view ('dpnilai', [
        "title" => "Nilai Magang"
    ]);
});

Route::get('/aaddmahasiswa', function () {
    return view ('aaddmahasiswa', [
        "title" => "Addmahasiswa"
    ]);
});

Route::get('/aaddabsen', function () {
    return view ('aaddabsen', [
        "title" => "Addabsen"
    ]);
});

Route::get('/aaddpembimbing', function () {
    return view ('aaddpembimbing', [
        "title" => "Addpembimbing"
    ]);
});

Route::get('/paddmahasiswa', function () {
    return view ('paddmahasiswa', [
        "title" => "Addmahasiswa"
    ]);
});

Route::get('/paddabsen', function () {
    return view ('paddabsen', [
        "title" => "Addabsen"
    ]);
});

Route::get('/paddproject', function () {
    return view ('paddproject', [
        "title" => "Addproject"
    ]);
});