<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::get('/', function(){
        return 'halaman admin';
    });

    Route::get('profile', function(){
        return 'halaman profile admin';
    });

     Route::resource('pasien', PasienController::class);
     Route::resource('dokter', DokterController::class);
});

    //Hanya untuk role pengguna
Route::group(['prefix' => 'pengguna', 'middleware' => ['auth','role:pengguna']], function(){
    Route::get('/', function(){
        return 'halaman pengguna';
    });

    Route::get('profile', function(){
        return 'halaman profile pengguna';
    });
});

Route::group(['prefix' => 'admin', 'middleware' =>['auth']], function(){
    Route::get('pasien.index');

    
}); 


// Route::get('pasien', function () {
//         return view('pasien.index');
//     })->middleware(['role:admin|pengguna']);

   
