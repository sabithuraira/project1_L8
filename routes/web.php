<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
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

Route::get('/halo', function () {
    return "Halo programmer";
});

Route::get('/home/halo', [HomeController::class, 'halo']);
Route::get('/home/haloname/{name}', [HomeController::class, 'haloWithName']);

//MENDEFINISIKAN ROUTE BERDASARKAN SEMUA FUNGSI DEFAULT LARAVEL
//PADA SUATU CONTROLLER
Route::resource('photos', PhotoController::class);

//JIKA HANYA INGIN MENGAKTIFKAN BEBERAPA FUNGSI PADA CONTROLLER
//GUNAKAN 'only' PADA ROUTES
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

//JIKA HANYA INGIN MEMBUANG BEBERAPA FUNGSI PADA CONTROLLER
//GUNAKAN 'except' PADA ROUTES
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]); 