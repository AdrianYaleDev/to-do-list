<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
Route::get('/', [TaskController::class, 'index']);
Route::post('/addTask', [TaskController::class, 'addTask']);
Route::post('/toggleTask/{id}', [TaskController::class, 'toggleTask']);
Route::post('/deleteTask/{id}', [TaskController::class, 'deleteTask']);


// Route::get('/', function () {
    
// });
// return view('tasks');