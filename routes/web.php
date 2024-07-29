<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
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
    return view('home');
});
Route::get('/greeting', function () {
    return view('home');
})->name('greeting'); 


Route::get('prodi', [ProdiController::class, 'list']);
Route::get('prodi-add', [ProdiController::class, 'create']);
Route::post('addprodi', [ProdiController::class, 'store']);

Route::get('mahasiswa', [MahasiswaController::class, 'list']);
Route::get('mahasiswa-add', [MahasiswaController::class, 'create']);
Route::post('addmahasiswa', [MahasiswaController::class, 'store']);
Route::get('mahasiswa-edit/{id}', [MahasiswaController::class, 'edit']);
Route::put('editmahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::get('mahasiswa-delete/{id}', [MahasiswaController::class, 'delete']);

