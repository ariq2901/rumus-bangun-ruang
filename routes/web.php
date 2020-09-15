<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumusController;
use App\Http\Controllers\PagesController;
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

//Menu
Route::get('/', [PagesController::class, 'index']);

// Tabung
Route::get('tabung', [RumusController::class, 'tabungPage']);
Route::post('rumus-tabung', [RumusController::class, 'rumusTabung']);

// Bola
Route::get('bola', [RumusController::class, 'bolaPage']);
Route::post('rumus-bola', [RumusController::class, 'rumusBola']);

// Kerucut
Route::get('kerucut', [RumusController::class, 'kerucutPage']);
Route::post('rumus-kerucut', [RumusController::class, 'rumusKerucut']);
