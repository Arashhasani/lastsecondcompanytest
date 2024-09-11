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


Auth::routes();



Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->middleware(['web','auth','isAdmin'])->group(function (){

    Route::get('','adminController@index')->name('admin.index');
    Route::resource('adminactivities','ActivityController',['parameters' => ['adminactivities' => 'activity']]);


});
