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
    // return view('welcome');
    return view('laravel');
});

Route::get('/dashboard', function () {
    return 'autorizado!';
});
// ->middleware(['auth'])->name('dashboard');

Route::resource('congregations', App\Http\Controllers\CongregationController::class);

require __DIR__.'/auth.php';
