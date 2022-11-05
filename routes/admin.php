<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // الاعدادات العامة
    Route::prefix('generalSetting')->controller(GeneralSettingController::class)->group(function(){
        Route::get('/', 'create')->name('generalSetting.create');
        Route::post('/', 'store')->name('generalSetting.store');
    });
    // اضافة مستخدم
    Route::prefix('users')->controller(UserController::class)->group(function(){
        Route::get('/', 'create')->name('users.create');
        Route::post('/', 'store')->name('users.store');
        Route::get('/{id}', 'edit')->name('users.edit');
        Route::post('/{id}', 'update')->name('users.update');
        Route::get('/destroy/{id}', 'destroy')->name('users.destroy');
    });
    // اضافة تصنيف
    Route::prefix('category')->controller(CategoryController::class)->group(function(){
        Route::get('/', 'create')->name('category.create');
        Route::post('/', 'store')->name('category.store');
        Route::get('/{id}', 'edit')->name('category.edit');
        Route::post('/{id}', 'update')->name('category.update');
        Route::get('/destroy/{id}', 'destroy')->name('category.destroy');
    });
    // اضافة تصنيف فرعى
    Route::prefix('subCategory')->controller(SubCategoryController::class)->group(function(){
        Route::get('/', 'create')->name('subCategory.create');
        Route::post('/', 'store')->name('subCategory.store');
        Route::get('/{id}', 'edit')->name('subCategory.edit');
        Route::post('/{id}', 'update')->name('subCategory.update');
        Route::get('/destroy/{id}', 'destroy')->name('subCategory.destroy');
    });
    // اضافة دروس
    Route::prefix('subject')->controller(SubjectController::class)->group(function(){
        Route::get('/', 'create')->name('subject.create');
        Route::post('/', 'store')->name('subject.store');
        Route::get('/{id}', 'edit')->name('subject.edit');
        Route::post('/{id}', 'update')->name('subject.update');
        Route::get('/destroy/{id}', 'destroy')->name('subject.destroy');
        Route::get('/category/ajax/{id}', 'categoryAjax')->name('category.ajax');
    });
});