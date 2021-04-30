<?php

use App\Http\Livewire\ThpsPodcast;
use Illuminate\Support\Facades\Route;
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

Route::get('/channel/thpspodcast', ThpsPodcast::class);

Route::get('/videos/keyword/{keyword}', [PlayVideosController::class, 'keyword']);

Route::get('/videos/{slug}/{id}', [PlayVideosController::class, 'gameWatch']);

require __DIR__.'/auth.php';