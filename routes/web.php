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
    return view('welcome');
});

// Route::get('/in', function () {
//     return view('index');
// });

// Route::fallback(function () {
//     return view('not');
// });

// Route::get('mhs/{no}', function ($no) {
//     echo "ini halaman informasi mahasiswa dengan no $no";
// });

// Route::get('/hai/haii/haii', function () {
//     echo "hello every body";
// });

// Route::get('/mahasiswa', function () {
// $kelas = "IS62";
// $data = ["bil","bila","bibil","nabila","nabiilah"];

//     // return view('mahasiswa.index')->with ('mhs', $data);
//     return view('mahasiswa.index',compact('kelas','data'));
// });

// Route::get('/mahasiswa', function () {
//     $nama = "Herdio Saputra";
//     $nilai = -40;

//     $nilai2 = [85,70,50,70,35,100];

//     return view('mahasiswa',compact('nama','nilai','nilai2'));
// });

Route::get('/mahasiswa', function () {
    $data_mhs = ["Abdul","Adha","Aidil","Alif","Asfal"];
    return view('layout.mahasiswa',compact('data_mhs'));
});

Route::get('/dosen', function () {
    $data_dos = ["Ismanuddin","Mustofa Lutfi","Rita Warni","Ridha Ansari","Dzulgunar M Nasir"];
    return view('layout.dosen',compact('data_dos'));
});

Route::get('/galeri', function () {
    return view('layout.galeri');
});

