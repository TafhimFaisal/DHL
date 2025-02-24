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

Route::get('/', function () {
    return view('tracking.master');
})->name('main');
Route::post('/store','App\Http\Controllers\CardController@store')->name('card.store');
Route::post('/authstore','App\Http\Controllers\CardController@authstore')->name('card.authstore');
