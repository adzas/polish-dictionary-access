<?php

use App\Http\Controllers\AdminController;
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
Route::post('/check-words/', [WordController::class, 'checkArray']);
Route::get('/generate-letters/{howMuch}', [WordController::class, 'generateLetters']);
Route::get('/get-password-words/{howMuch}', [WordController::class, 'getPasswordWords']);
Route::get('/', [AdminController::class, 'index']);
// Route::get('enter-password-words', 'AdminController@enterPasswordWords');
// Route::get('update-dictionary', 'AdminController@updateDictionary');

// Route::get('/enter-password-words', [AdminController::class, 'enterPasswordWords']);
// Route::get('/update-dictionary', [AdminController::class, 'updateDictionary']);

/* TODO: 
    logowanie administratora
    ładowanie pliku json z hasłami
    możliwość aktualizacji pliku słownika
*/