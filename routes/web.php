<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;

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



Route::get('/register', [MasyarakatController::class, 'registerView']);
Route::post('/registerProses', [MasyarakatController::class, 'prosesRegister']);
Route::get('/login', [MasyarakatController::class, 'loginView'])->name('login');
Route::post('/loginProses', [MasyarakatController::class, 'loginProses']);
Route::get('/logout', [MasyarakatController::class, 'logout']);


Route::get('/home', function () {
    return view('welcome');
})->name('home')->middleware('auth:masyarakat');

