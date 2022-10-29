<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Web\HomeController;

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

// login & logout
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'loginForm')->name('login.form');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
});
// home
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('web.index');
    Route::get('/subjects/{id}', 'subjects')->name('web.subjects');
    Route::get('/subject_details/{id}', 'subject_details')->name('web.subject.details');
});
