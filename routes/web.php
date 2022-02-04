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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home_admin');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //Categorias
    Route::group(['prefix' => 'categorias'], function () {
        Route::get('listar', [CommandController::class, 'showCategories'])->name('show_categories');
    });
});
