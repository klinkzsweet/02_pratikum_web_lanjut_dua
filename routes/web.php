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


use App\Http\Controllers\PageController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HalamanAboutUs;
use App\Http\Controllers\HalamanContactUs;
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HalamanNews;
use App\Http\Controllers\HalamanProducts;
use App\Http\Controllers\HalamanProgram;
use App\Http\Controllers\HomeController;



Route::get('/contactus', [HalamanContactUs::class, 'index']);

Route::get('/aboutus', [HalamanAboutUs::class, 'index']);

Route::prefix('program')->group(function(){
    Route::get('/karir', [HalamanProgram::class, 'index1']);
    Route::get('/magang', [HalamanProgram::class, 'index2']);
    Route::get('/kunjunganindustri', [HalamanProgram::class, 'index3']);
});

Route::get('/news{id}', [HalamanNews::class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/marbeledugames', [HalamanProducts::class, 'index1']);
    Route::get('/marbelandfriendskidsgames', [HalamanProducts::class, 'index2']);
    Route::get('/riristorybooks', [HalamanProducts::class, 'index3']);
    Route::get('/kolakkidssongs', [HalamanProducts::class, 'index4']);
});

Route::get('/home', [HalamanHome::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles{id}', [ArticleController::class, 'articles']);

