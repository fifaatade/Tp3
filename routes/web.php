<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\AffEtudiantController;
use App\Http\Controllers\ListEtudiantController;
use App\Http\Controllers\AffEnseignantController;

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
Route::controller(ListEtudiantController::class)->middleware('auth')->group(function(){
    Route::get('/','index')->name('home');
    Route::get('etudiant/{id?}','show')->name('detail');
    Route::post('save/etudiant','storeStudent')->name('etudiantStore');
    Route::get('delete/{id}','destroy')->name('delete'); 
    Route::get('update/{id}','edit')->name('updateEtudiant');
    Route::post('update/{id}','update')->name('update');
    Route::get('activate/{id}','activate')->name('activate');
    Route::get('home/all',"all")->name("all");

});

Route::controller(UserController::class)->prefix('user')->group(function(){
    Route::get('login', "login" )->name("login");
    Route::get('register', "register" )->name("register");
    Route::post('store/register',"store" )->name("storeUser");    
    Route::get('/verifyEmail/{email}', "verify" )->name("verifyEmail");
    Route::get('/forgot_password', "forgetPassword" )->name("forgetPassword");
    Route::post('forgot_password',"relogin" )->name("relogin");   
    Route::get('/change_password/{email}', "verifyEmail" )->name("verify");
    Route::post('/password_change',"modifyPassWord")->name("modifyPassWord");
    Route::get('/verify_email/{email}', "modifyPass" )->name("modifyPass");
    Route::post('authentification',"authentification" )->name("authentification");    
    Route::get('logout','logout')->name('logout');
});

Route::controller(CoursController::class)->middleware('auth')->group(function(){
    Route::get('gestionCours',"indexCours")->name('cours');
    Route::get('create/cours','create')->name('ajouter');
    Route::post('save','store')->name('courStore');
    Route::get('show/{id}','show')->name('show'); 
    Route::get('edit/cours/{id}','edit')->name('edit');
    Route::post('update/cours/{id}','update')->name('updateCours');
    Route::get('delete/{id}','destroy')->name('delete');
    Route::get('affectation/cours',"affCours")->name('affCours');
 
});

Route::controller(EnseignantController::class)->middleware('auth')->group(function(){
    Route::get('list/Enseignant','indexEnseignant')->name('enseignant');
    Route::get('create/enseignant',"create")->name('addEnseignant');
    Route::post('store/enseignant',"store")->name('enseignantStore');
    Route::get('delete/enseignant/{id}','destroy')->name('deleteEnseignant');
    Route::get('show/enseigant/{id}','show')->name('showEnseignant'); 
    Route::get('edit/enseigant/{id}','edit')->name('editEnseignant');
    Route::post('update/enseigant/{id}','update')->name('updateEnseignant');
    Route::get('affecter/cours/{id}','affCoursEnseignant')->name('affCoursEnseignant');
});

Route::controller(AffEtudiantController::class)->middleware('auth')->group(function(){
    Route::post('save/affectation/cours/enseignant','storeAff')->name('affStore');
});

Route::controller(AffEnseignantController::class)->middleware('auth')->group(function(){
    Route::post('save/affectation/cours/enseignant/{id}','storeAffEns')->name('affEnsStore');
    Route::get('delete/enseignant/aff/{id}','destroy')->name('deleteAffEns');
});

Route::controller(CategorieController::class)->middleware('auth')->group(function(){
    Route::get('create/categorie','indexCategorie')->name('addCategorie');
    Route::post('store/categorie',"storeCategorie")->name('categorieStore');
});