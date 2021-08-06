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

Route::permanentRedirect('/', 'login');

Auth::routes();
Route::get('email/verify', '\App\Http\Controllers\Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', '\App\Http\Controllers\Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', '\App\Http\Controllers\Auth\VerificationController@resend')->name('verification.resend');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('role:admin');
    Route::resource('clients', \App\Http\Controllers\ClientController::class);
    Route::resource('projects', \App\Http\Controllers\ProjectController::class);
    Route::resource('tasks', \App\Http\Controllers\TaskController::class);

    Route::post('media/{model}/{id}/upload', [\App\Http\Controllers\MediaController::class, 'store'])->name('media.upload');
    Route::get('media/{mediaItem}/download', [\App\Http\Controllers\MediaController::class, 'download'])->name('media.download');
    Route::delete('media/{model}/{id}/{mediaItem}/delete', [\App\Http\Controllers\MediaController::class, 'destroy'])->name('media.delete');
});
