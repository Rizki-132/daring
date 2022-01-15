<?php

use App\Http\Controllers\KelasController;
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
    return view('welcome');
});

Route::get('/kelas',[KelasController::class,'kelas'])->name('kelas')->middleware('auth');
;
Route::middleware(['auth:sanctum', 'verified'])->get('/kelas',[KelasController::class,'kelas'])->name('kelas');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
