<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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



//redirection through the controller

Route::get('/', [NavController::class, 'welcome']);

Route::get('/add', [NavController::class, 'add']);

Route::get('/statues', [NavController::class, 'statues']);

Route::post('/edit', [NavController::class, 'edit']);


//send the form
Route::post('/add', [ActionController::class, 'add']);

Route::post('/delete', [ActionController::class, 'delete']);

Route::post('/editOne', [ActionController::class, 'editOne']);
