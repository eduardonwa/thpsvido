<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserNotificationsController;

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

Route::get('/', [VideosController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    
    Route::get('dashboard', [
        DashboardController::class, 'index'
    ])->name('dashboard');
    
    Route::get('payments/create', [
        PaymentsController::class, 'create'
    ])->name('payments.create');

    Route::post('payments', [
        PaymentsController::class, 'store'
    ]);

    Route::get('notifications', 
        [UserNotificationsController::class, 'show'
    ])->name('notifications.show');

    Route::get('users', 
        [UsersController::class, 'index'
    ])->name('users.index');

});

require __DIR__.'/auth.php';