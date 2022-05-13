<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');


    Route::get('/establishvisit', [\App\Http\Controllers\EstabVisitController::class, 'index'])->name('establishvisit');
    //Route::view('establishvisit', 'establishvisit')->name('establishvisit');
    Route::post('establishvisit', [\App\Http\Controllers\EstabVisitController::class, 'establishmentvisit'])
        ->name('establishvisit.establishmentvisit');

    Route::resource('visits', \App\Http\Controllers\VisitController::class);

});

require __DIR__.'/auth.php';
