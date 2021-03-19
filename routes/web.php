<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetugasController;



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



Route::get('/register', [AuthController::class, 'registerView'])->name('register');
Route::post('/registerProses', [AuthController::class, 'prosesRegister']);
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/loginProses', [AuthController::class, 'loginProses']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth:petugas', 'admin')->prefix('admin')->group(function(){
    Route::get('/', [PetugasController::class, 'adminHome']);
    Route::resource('petugas', PetugasController::class);
});

Route::get('/home', function(){
    return view('welcome');
})->name('masyarakat')->middleware('auth:masyarakat');


