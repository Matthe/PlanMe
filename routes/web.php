<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionPlanController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\PageController;

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


Auth::routes();

Route::get('/session', [SessionPlanController::class, 'index']);

Route::get('/', [PageController::class, 'getHome']);
Route::get('/about', [PageController::class, 'getAbout']);
Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/todo', [PageController::class, 'getTodo']);

Route::get('/todo/index', [TodoController::class, 'index']);
Route::prefix('/todo/index')->group(function (){
    Route::post('/store', [TodoController::class, 'store']);
    Route::put('/{id}', [TodoController::class, 'update']);
    Route::delete('/{id}', [TodoController::class, 'destroy']);
});


Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/submit', [ContactController::class, 'submit']);

