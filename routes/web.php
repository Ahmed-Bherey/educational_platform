<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Web\UserLoginController;
use App\Http\Controllers\Admin\Auth\LoginController;

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

// login & logout Admin
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'loginForm')->name('login.form');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
});
// login & logout User
Route::controller(UserLoginController::class)->prefix('user')->group(function(){
    Route::get('login', 'loginForm')->name('user.login.form');
    Route::post('login', 'login')->name('user.login');
    Route::get('logout', 'logout')->name('user.logout');
    Route::get('register', 'registerForm')->name('register.form');
    Route::post('register', 'register')->name('user.register');
});
// home
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('web.index');
    // Route::middleware('auth')->group(function(){
        Route::get('/subjects/{id}', 'subjects')->name('web.subjects');
        Route::get('/subjectsAll', 'subjectsAll')->name('web.subjectsAll');
        Route::get('/subject_details/{id}', 'subject_details')->name('web.subject.details');
        Route::get('/subject_content/{id}', 'subject_content')->name('web.subject.content');
        Route::get('/sub_cat_subjects/{id}', 'sub_cat_subjects')->name('sub_cat_subjects');
        Route::get('/download/{id}', 'download')->name('download');
    });
    // Roles
    Route::resource('roles', RoleController::class);
// });
