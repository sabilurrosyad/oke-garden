<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use App\Models\Information;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();


// admin section

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/home1', [InformationController::class, 'index'])->name('home1');
    Route::get('/tambahpengguna', [InformationController::class, 'tambahpengguna'])->name('tambahpengguna');
    Route::post('/insertdata', [InformationController::class, 'insertdata'])->name('insertdata');
    Route::get('/delete/{id}', [InformationController::class, 'deletedata'])->name('delete');
    Route::post('/updatedata/{id}', [InformationController::class, 'updatedata'])->name('updatedata');
    Route::get('/tampilkandata/{id}', [InformationController::class, 'tampilkandata'])->name('tampilkandata');
});

// common section
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/default', [App\Http\Controllers\InformationController::class, 'defaultPage'])->name('default');
Route::get('/detail/{id}', [InformationController::class, 'detailData'])->name('detail');
