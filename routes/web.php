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

Route::middleware(['auth', 'termsAccepted'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('role:admin');
    Route::resource('clients', \App\Http\Controllers\ClientController::class);
    Route::resource('projects', \App\Http\Controllers\ProjectController::class);
    Route::resource('tasks', \App\Http\Controllers\TaskController::class);

    Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
        Route::get('/', [\App\Http\Controllers\NotificationController::class, 'index'])->name('index');
        Route::put('/{notification}', [\App\Http\Controllers\NotificationController::class, 'update'])->name('update');
        Route::delete('/destroy', [\App\Http\Controllers\NotificationController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'media', 'as' => 'media.'], function () {
        Route::post('{model}/{id}/upload', [\App\Http\Controllers\MediaController::class, 'store'])->name('upload');
        Route::get('{mediaItem}/download', [\App\Http\Controllers\MediaController::class, 'download'])->name('download');
        Route::delete('{model}/{id}/{mediaItem}/delete', [\App\Http\Controllers\MediaController::class, 'destroy'])->name('delete');
    });

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/change-password', [\App\Http\Controllers\ProfileController::class, 'changePassword'])->name('profile.changePassword');

    Route::get('token', function () {
        return auth()->user()->createToken('crm')->plainTextToken;
    });
});

Route::get('terms', [\App\Http\Controllers\TermsController::class, 'index'])->middleware('auth')->name('terms.index');
Route::post('terms', [\App\Http\Controllers\TermsController::class, 'store'])->middleware('auth')->name('terms.store');
