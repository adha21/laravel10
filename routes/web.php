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

Route::get('mahasiswa', function () {
    $kelas = "IS62";
    $data = ["Khalifa","Adha","Sailijar","Aidil"];

    return view('mahasiswa.index',compact('kelas','data'));
});