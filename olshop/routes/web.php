<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ForminputController;
use App\Http\COntrollers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AboutController;
   

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


Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/forminput', [ForminputController::class, 'index']);
Route::post('/forminput', [ForminputController::class, 'output']);

// ini route tampilan admin backend
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
});

// route untuk tampilan frontend
// properti 2 index_frontend
Route::prefix('frontend')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index_frontend']);
    Route::get('/about', [AboutController::class, 'index']);    

});

