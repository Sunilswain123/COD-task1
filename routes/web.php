<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

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

Route::get('/', [todosController::class,'index']);
Route::get('/create', function () {
    return view('create');
});
Route::get('/update/{id}', [todosController::class,'edit'])->name("todo.edit");
Route::post('/create',[todosController::class,'store'])->name("todo.store");
Route::get('/delete/{id}',[todosController::class,'delete'])->name("todo.delete");
Route::post('/update',[todosController::class,'updateData'])->name("todo.updateData");


