<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\DepartmentController::class, 'index'])->name('home');

Route::group(['prefix' => 'department'], function () {
    Route::get('', 'App\Http\Controllers\DepartmentController@index')->name('department');
    Route::get('create', 'App\Http\Controllers\DepartmentController@create')->name('department.create');
    Route::post('store', 'App\Http\Controllers\DepartmentController@store')->name('department.store');
    Route::get('show/{department}', 'App\Http\Controllers\DepartmentController@show')->name('department.show');
    Route::get('edit/{department}', 'App\Http\Controllers\DepartmentController@edit')->name('department.edit');
    Route::post('update/{department}', 'App\Http\Controllers\DepartmentController@update')->name('department.update');
    Route::delete('destroy/{department}', 'App\Http\Controllers\DepartmentController@destroy')->name('department.destroy');
});
