<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlayVideosController;

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

Route::get('test', function (){
    return view('test');
});

Route::get('/videos/keyword/{keyword}', [PlayVideosController::class, 'keyword']);
Route::get('/videos/thps2/{key}', [PlayVideosController::class, 'thps2']);
Route::get('/videos/thps3/{key}', [PlayVideosController::class, 'thps3']);
Route::get('/videos/thps4/{key}', [PlayVideosController::class, 'thps4']);
Route::get('/videos/thug/{key}', [PlayVideosController::class, 'thug']);
Route::get('/videos/thug2/{key}', [PlayVideosController::class, 'thug2']);
Route::get('/videos/thaw/{key}', [PlayVideosController::class, 'thaw']);
Route::get('/videos/thp8/{key}', [PlayVideosController::class, 'thp8']);
Route::get('/videos/thpg/{key}', [PlayVideosController::class, 'thpg']);
Route::get('/videos/thps1plus2/{key}', [PlayVideosController::class, 'thps1Plus2']);
Route::get('/videos/thugpro/{key}', [PlayVideosController::class, 'thugpro']);

Route::middleware(['auth'])->group(function () {
    
    Route::get('dashboard', [
        DashboardController::class, 'index'
    ])->name('dashboard');

});

require __DIR__.'/auth.php';