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

Route::any('admin/plans/search', 'App\Http\Controllers\Admin\PlanController@search')->name('plans.search');
Route::get('admin/plans', 'App\Http\Controllers\Admin\PlanController@index')->name('plans.index');
Route::get('admin/plans/create', 'App\Http\Controllers\Admin\PlanController@create')->name('plans.create');
Route::post('admin/plans/store', 'App\Http\Controllers\Admin\PlanController@store')->name('plans.store');
Route::get('admin/plans/{url}', 'App\Http\Controllers\Admin\PlanController@showByUrl')->name('plans.show');
Route::delete('admin/plans/{url}', 'App\Http\Controllers\Admin\PlanController@destroy')->name('plans.destroy');
Route::get('admin/plans/{url}/edit', 'App\Http\Controllers\Admin\PlanController@edit')->name('plans.edit');
Route::put('admin/plans/{url}/update', 'App\Http\Controllers\Admin\PlanController@update')->name('plans.update');

Route::get('/', function () {
    return view('welcome');
});
