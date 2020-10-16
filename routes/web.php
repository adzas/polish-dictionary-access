<?php

use App\Http\Controllers\WordController;
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

Route::get('/check-word/{word}', [WordController::class, 'check']);
Route::get('/generate-letters/{howMuch}', [WordController::class, 'generateLetters']);
Route::get('/get-password-words/{howMuch}', [WordController::class, 'getPasswordWords']);

/* TODO: 
    logowanie administratora
    ładowanie pliku json z hasłami
    możliwość aktualizacji pliku słownika
*/