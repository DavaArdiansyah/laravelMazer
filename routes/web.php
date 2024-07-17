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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::prefix('multi-level-menu')->group(function () {
    Route::get('/first-level/second-level', function () {
        return view('multi-level-menu.first-level.second-level');
    })->name('multi-level-menu.first-level.second-level');

    Route::get('/first-level/second-level-menu', function () {
        return view('multi-level-menu.first-level.second-level-menu');
    })->name('multi-level-menu.first-level.second-level-menu');

    Route::get('/another-menu', function () {
        return view('multi-level-menu.another-menu.second-level-menu');
    })->name('multi-level-menu.another-menu.second-level-menu');
});
