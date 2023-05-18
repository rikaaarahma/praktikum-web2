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

Route::get('/salam', function () {
    return "Hallo Good Afternoon:)";
});

Route::get('/about', function(){
    return view('about',[
        "title" => "About",
        "nama" => "Rika Rahma",
        "umur" => 18,
        "email" => "rikarahmaa212@gmail.com"
    ]);
});

Route::get('/nf', function(){
    return view('nf');
});

Route::get('/pemeriksaan', function(){
    return view('pemeriksaan', [
        "title" => "Pemeriksaan",
        "heading" => "Form Pemeriksaan Pasien",
        "TD" => "120/80 mmhg",
        "AU" => "Pria : < 7 mg/dl | Wanita : < 6 mg/dl",
        "KT" => "< 200 mg/dl",
        "GD1" => "Puasa : 70 - 110 mg/dl ",
        "GD2" => "2 jam setelah makan : 100 - 150 mg/dl",
        "GD3" => "Sewaktu/acak : 70 -125 mg/dl"
    ]);
});