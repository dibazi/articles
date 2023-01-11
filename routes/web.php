<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;

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

//Route::get('/', function () {return view('welcome') });

Route::get('/add', function () {
    return view('articles/actions/store')->name('create.article');
});

Route::get('/', [articleController::class, 'index'])->name('index.articles');

Route::get('/create', [articleController::class, 'create'])->name('create.article');

Route::get('/categories', [articleController::class, 'categories'])->name('categories.articles');

Route::get('/articles', [articleController::class, 'index'])->name('index.articles');

Route::post('store', [articleController::class, 'store'])->name('store.client');

