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

Route::get('/logoutt',function (){
    \Illuminate\Support\Facades\Auth::logout();
    return back();
})->name('logoutt');

Route::prefix('/')->namespace('App\Http\Controllers\Web')->middleware(['web'])->group(function (){

    Route::get('','HomeController@index')->name('web.index');
    Route::get('activity/{activity}','ActivityController@activityPage')->name('activity.page');
    Route::get('activity/{activity}/book','ActivityController@activityBookPage')->name('activity.book.page')->middleware(['web','auth']);
    Route::post('activity/{activity}/book','ActivityController@activityBookPageSubmit')->name('activity.book.page')->middleware(['web','auth']);
});
