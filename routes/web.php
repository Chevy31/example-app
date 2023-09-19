<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\LoginController;

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
Route::group(['middleware'=>['auth','aksesuser:admin']], function(){
    Route::get('/',[InputController::class, 'indexAdmin']);
});

Route::group(['middleware'=>['auth','aksesuser:user']], function(){
    Route::get('/home',[InputController::class, 'indexUser']);
});

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::get('/tambahdata1',[InputController::class, 'tambahdata1'])->name('tambahdata1');
Route::post('/insertdata',[InputController::class, 'insertdata'])->name('insertdata');
Route::get('/tampildata/{id}',[InputController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[InputController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[InputController::class, 'deletedata'])->name('deletedata');
// eksport pdf dan excel
Route::get('/eksportpdf',[InputController::class, 'eksportpdf'])->name('eksportpdf');
Route::get('/eksportexcel',[InputController::class, 'eksportexcel'])->name('eksportexcel');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginProcess',[LoginController::class, 'loginProcess'])->name('loginProcess');

Route::post('/registerUser',[LoginController::class, 'registerUser'])->name('registerUser');
Route::get('/register',[LoginController::class, 'register'])->name('register');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
