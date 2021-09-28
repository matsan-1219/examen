<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AceitesController;
use App\Http\Controllers\LlantasController;
use App\Http\Controllers\RefaccionesController;
use App\Http\Controllers\CascosController;
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

Route::get('/',HomeController::class);
Route::get('/aceite',[AceitesController::class,'aceite']);
Route::get('/llanta',[LlantasController::class,'llanta']);
Route::get('/refaccion',[RefaccionesController::class,'refaccion']);
Route::get('/casco',[CascosController::class,'casco']);

