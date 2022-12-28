<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanersController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\NavsController;
use App\Http\Controllers\ThepublicController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VffController;
use App\Http\Controllers\PostController;
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
    return view('index');
});
Route::get('/adm', function () {
    return view('admin.admin');
});
// Route::get('/', function () {
//     return view('admin.cal.calculator');
// });
// Route::get('/baners/{id}', 'BanersController@index');
// Route::get('/index', [ThepublicController::class,"index"]);
// Route::get('/search', [SearchController::class,"index"]);
// Route::post('/search', [SearchController::class,"store"]);

// Route::get('/', [ThepublicController::class,"index"]);
// Route::get('/search', [SearchController::class,"index"]);
// Route::post('/search', [SearchController::class,"store"]);


Route::group(['prefix'=>'adm'], function () {
    Route::get('/adm', [ReportController::class,"media"]);
    Route::get('/adm', [ReportController::class,"baners"]);


Route::resource('/baners', BanersController::class);
Route::resource('/cal', CalculatorController::class);
Route::resource('/header', HeaderController::class);
Route::resource('/navs', NavsController::class);
Route::resource('/thepublic', ThepublicController::class);
Route::resource('/report', ReportController::class);
Route::resource('/media', MediaController::class);
Route::resource('/sliders', SlidersController::class);
Route::resource('/product', ProductController::class);
Route::resource('/vff', VffController::class);
Route::resource('/post', PostController::class);
});
