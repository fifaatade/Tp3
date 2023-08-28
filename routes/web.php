<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ListEtudiantController;

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
Route::get('/',[ListEtudiantController::class,'index'])->name('home');
Route::get('/etudiant/{id?}',[ListEtudiantController::class,'show'])->name('detail');
Route::post('/save',[ListEtudiantController::class,'store'])->name('etudiantStore');
Route::get('/delete/{id}',[ListEtudiantController::class,'destroy'])->name('delete'); 
Route::get('/update/{id}',[ListEtudiantController::class,'edit'])->name('updateEtudiant');
Route::post('/update/{id}',[ListEtudiantController::class,'update'])->name('update');
Route::get('/activate/{id}', [ListEtudiantController::class, 'activate'])->name('activate');

Route::get('login', [UserController::class, "login"] )->name("login");
Route::get('register', [UserController::class, "register"] )->name("register");