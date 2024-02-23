<?php

use App\Http\Controllers\Authmanager;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Authmanager::class, 'welcome']);
Route::get('/login', [Authmanager::class, 'login'])->name('login');
Route::post('/login', [Authmanager::class, 'loginpost'])->name('login.post');
Route::get('/register', [Authmanager::class, 'registration'])->name('register');
Route::post('/register', [Authmanager::class, 'registrationpost'])->name('register.post');
Route::get('/logout', [Authmanager::class, 'logout'])->name('logout');
Route::get('/home', [Authmanager::class, 'home'])->name('home');
Route::post('/home', [HomeController::class, 'homepost'])->name('home.post');
Route::get('/list', [HomeController::class, 'list'])->name('list.post');
Route::get('/edit', [HomeController::class, 'edit'])->name('edit');
Route::post('/list', [HomeController::class, 'editpost'])->name('edit.post');
Route::delete('/todos/{id}', [HomeController::class, 'deleteTodo'])->name('todo.delete');




