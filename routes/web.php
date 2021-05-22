<?php

use App\Http\Livewire\ThpsPodcast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AbilitiesController;
use App\Http\Controllers\OldSchoolController;
use App\Http\Controllers\ThpsNerdsController;
use App\Http\Controllers\PlayVideosController;
use App\Http\Controllers\AssignRolesController;
use App\Http\Controllers\AbilitiesRoleController;

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

Route::get('/channel/thpsnerds', [ThpsNerdsController::class, 'index']);

Route::get('/videos/old-school/{id}', [OldSchoolController::class, 'show']);

Route::get('/videos/thps-nerds/{id}', [ThpsNerdsController::class, 'show']);

Route::get('/videos/keyword/{keyword}', [PlayVideosController::class, 'keyword']);

Route::get('/videos/{slug}/{id}', [PlayVideosController::class, 'gameWatch']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('uploads', function() {
        return view('admin.uploads.index');
    })->name('uploads');

    Route::get('users', function() {
        return view('admin.users.index');
    })->name('users');

    Route::get('/roles', function() {
        return view('admin.roles.index');
    })->name('roles');

    Route::get('/abilities', function() {
        return view('admin.abilities.index');
    })->name('abilities');

    Route::resource('roles', RolesController::class)->except('index');

    Route::resource('abilities', AbilitiesController::class)->except('index');

    Route::post('role/{role}/assignAbility', [AbilitiesRoleController::class, 'assignAbility']);

    Route::post('user/{user}/assignRole', [AssignRolesController::class, 'assignRole'])->name('assignRole');

    Route::post('user/{user}/unassignRole', [AssignRolesController::class, 'unassignRole'])->name('unassignRole');
    
    Route::get('/oldschool/create', [OldSchoolController::class, 'create'])->name('create.oldschool');

    Route::get('/thpsnerds/create', [ThpsNerdsController::class, 'create'])->name('create.thpsnerds');
    
    Route::post('/oldschool', [OldSchoolController::class, 'store']);

    Route::post('/thpsnerds', [ThpsNerdsController::class, 'store']);

    Route::delete('/removeNerd/{id}', [ThpsNerdsController::class, 'destroy']);

    Route::delete('/removeOldSchool/{id}', [OldSchoolController::class, 'destroy']);
    
    Route::post('/publish-banner', [BannerController::class, 'store']);

    Route::delete('/remove-banner/{id}', [BannerController::class, 'destroy']);

});


require __DIR__.'/auth.php';