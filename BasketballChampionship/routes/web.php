<?php

use App\Http\Controllers\ChampionshipController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WebpageController;
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

Route::resource('team', TeamController::class);

Route::resource('championship', ChampionshipController::class);

Route::get('/', [WebpageController::class, 'index']);

