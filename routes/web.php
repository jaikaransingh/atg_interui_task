<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;

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
    return view('index');
});

Route::get('/addtask', function () {
    return view('auth.task.add');
})->middleware('auth');

Route::get('/update/{id}', function ($id) {
    return view('auth.task.update', compact('id'));
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [TaskController::class, 'dashboard'])->middleware('auth')->name('home');
