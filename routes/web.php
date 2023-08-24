<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get('/',[EtudiantController::class,'index'])->name('home');
Route::get('/detail/{id?}',[EtudiantController::class,'show'])->name('detail');
//Route::post('/detail/{addstudent?}',[EtudiantController::class,'addstudent'])->name('student');
//Route::get('/',[EtudiantController::class,'delete'])->name('delete');