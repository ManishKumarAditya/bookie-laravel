<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
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

Route::get('/',[Home::class,"views"])->name('homepage');
Route::get('/delete/{id}',[Home::class,"delete"])->name('delete');
Route::post('/',[Home::class,"store"])->name('store');

