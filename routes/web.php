<?php

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

    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('tasks', App\Http\Controllers\taskController::class);
 // リソースを使用しない場合
 // Route::get('/tasks', [App\Http\Controllers\taskController::class, 'index']);
 // Route::get('/tasks/create', [App\Http\Controllers\taskController::class, 'create']);
 // Route::post('/tasks', [App\Http\Controllers\taskController::class, 'store']);
 // Route::get('/tasks/{task}', [App\Http\Controllers\taskController::class, 'show']);
 // Route::get('/tasks/{task}/edit', [App\Http\Controllers\taskController::class, 'edit']);
 // Route::patch('/tasks/{task}', [App\Http\Controllers\taskController::class, 'update']);
 // Route::delete('/tasks/{task}', [App\Http\Controllers\taskController::class, 'destroy']);