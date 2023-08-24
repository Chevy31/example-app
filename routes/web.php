<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('tampildata');
// });
Route::get('/',[EmployeeController::class, 'index'])->name('pegawai');
Route::get('/tambahpegawai',[EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');
Route::get('/tampildata/{id}',[EmployeeController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[EmployeeController::class, 'deletedata'])->name('deletedata');
// eksport pdf
Route::get('/eksportpdf',[EmployeeController::class, 'eksportpdf'])->name('eksportpdf');
Route::get('/eksportexcel',[EmployeeController::class, 'eksportexcel'])->name('eksportexcel');