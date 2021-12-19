<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\ParticipantController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register-vaccine/{doses}', [App\Http\Controllers\RegisterVaccineController::class, 'index'])->name('register-vaccine');
Route::post('/register-vaccine/store', [App\Http\Controllers\RegisterVaccineController::class, 'store'])->name('post-register');
Route::get('/register-vaccine', [App\Http\Controllers\RegisterVaccineController::class, 'doses'])->name('doses');
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware('auth', App\Http\Middleware\IsAdmin::class)
    ->group(function () {

        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        Route::resource('participant', ParticipantController::class);
        Route::resource('vaccine', VaccineController::class);
        Route::resource('schedule', ScheduleController::class);
        Route::get('/participant/schedule/{id}', [App\Http\Controllers\Admin\ScheduleController::class, 'addSchedule'])->name('add-schedule');
    
    });

Auth::routes(['verify' => true]);