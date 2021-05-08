<?php

use App\Http\Livewire\ThpsPodcast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayVideosController;
use App\Http\Controllers\OldSchoolController;
use App\Http\Controllers\RolesController;

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

Route::get('/channel/oldschool', [OldSchoolController::class, 'index']);

Route::get('/videos/keyword/{keyword}', [PlayVideosController::class, 'keyword']);

Route::get('/videos/{slug}/{id}', [PlayVideosController::class, 'gameWatch']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('uploads', function() {
        return view('admin.uploads');
    })->name('uploads');

    Route::get('users', function() {
        return view('admin.users.index');
    })->name('users');

    Route::resource('roles', RolesController::class);
});


require __DIR__.'/auth.php';