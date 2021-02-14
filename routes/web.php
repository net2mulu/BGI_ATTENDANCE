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
    return view('check');
});

Route::get('/hr', function () {
    return view('back.dash');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dash', [App\Http\Controllers\AdminController::class, 'index'])->name('dash');
Route::get('/addStaff', [App\Http\Controllers\AdminController::class, 'addStaff'])->name('addStaff');
Route::post('/saveStaff', [App\Http\Controllers\AdminController::class, 'store'])->name('saveStaff');
Route::get('/StaffList', [App\Http\Controllers\AdminController::class, 'StaffList'])->name('StaffList');
