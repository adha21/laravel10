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

// Route::get('/contoh', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

// Route::get('mahasiswa/{nama}', function ($nama) {
//     echo "Ini adalah data $nama";
// });

// Route::get('/hello/hello1', function () {
//     echo "Hello World";
// });

// Route::get('mahasiswa', function () {
//     $kelas = "IS62";
//     $data = ["Khalifa","Adha","Sailijar","Abdul"];

//     return view('mahasiswa.index',compact('kelas','data'));
// });

// Route::get('/mahasiswa', function () {
//     $nama = "Adha Mastalul";
//     $nilai = 87;

//     $nilai2 = [85,70,50,30,80];

//     return view('mahasiswa', compact('nama','nilai','nilai2'));
// });

Route::get('/master', function () {
    $data_mhs = ["Abdul","Adha","Aidil","Alif","Asfal"];
    return view('layout.master',compact('data_mhs'));
});

Route::get('/mahasiswa', function () {
    $data_mhs = ["Abdul","Adha","Aidil","Alif","Asfal"];
    return view('data.mahasiswa',compact('data_mhs'));
});

Route::get('/dosen', function () {
    $data_dos = ["Ismanuddin","Mustofa Lutfi","Rita Warni","Ridha Ansari","Dzulgunar M Nasir"];
    return view('data.dosen',compact('data_dos'));
});

Route::get('/galeri', function () {
    return view('data.galeri');
});
