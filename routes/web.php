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

Route::get('/login', function () {
    return view('pages.login');
})->name('loginForm');

Route::get('/', function () {
    return view('pages.index');
})->name('dailyForm');

Route::post('/leads', 'App\Http\Controllers\LeadsActionController@leads')->name('leads');
