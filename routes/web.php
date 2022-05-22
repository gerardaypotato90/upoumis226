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

    Route::get('/dashboard', [\App\Http\Controllers\HighchartController::class, 'handleChart'])->name('dashboard');

    /*
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');

    Route::get('/delete/{id}', [\App\Http\Controllers\DeleteController::class, 'destroy'])->name('delete');
    Route::get('/remove/{id}', [\App\Http\Controllers\DeleteController::class, 'removed'])->name('remove');
    Route::get('/establishvisit', [\App\Http\Controllers\EstabVisitController::class, 'index'])->name('establishvisit');
    //Route::get('/establishvisit', [\App\Http\Controllers\EstabVisitController::class, 'expose'])->name('establishvisit');
    //Route::view('establishvisit', 'establishvisit')->name('establishvisit'); expose
    Route::post('establishvisit', [\App\Http\Controllers\EstabVisitController::class, 'establishmentvisit'])
        ->name('establishvisit.establishmentvisit');

   Route::get('/exposurep', [\App\Http\Controllers\EstabVisitController::class, 'expoindex'])->name('exposurep');
   Route::post('exposurep', [\App\Http\Controllers\EstabVisitController::class, 'expose'])
        ->name('exposurep.expose');


   Route::resource('visits', \App\Http\Controllers\VisitController::class);
   Route::resource('tracker', \App\Http\Controllers\TrackerController::class);
   
});

require __DIR__.'/auth.php';
