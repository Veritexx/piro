<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {


// HOME
Route::get('/home', [HomeController::class, 'index'])->name('home');

// DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboards.index');

// TASKS
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('task', [TaskController::class, 'create'])->name('tasks.create');
Route::post('task', [TaskController::class, 'store'])->name('tasks.store');
Route::get('task/{hash}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('task/show/{hash}', [TaskController::class, 'show'])->name('tasks.show');
Route::put('task/{hash}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('task/{hash}', [TaskController::class, 'destroy'])->name('tasks.destroy');


// USERS
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('user', [UserController::class, 'create'])->name('users.create');
    Route::post('user', [UserController::class, 'store'])->name('users.store');
    Route::get('user/{hash}', [UserController::class, 'edit'])->name('users.edit');
    Route::get('user/show/{hash}', [UserController::class, 'show'])->name('users.show');
    Route::put('user/{hash}', [UserController::class, 'update'])->name('users.update');
    Route::delete('user/{hash}', [UserController::class, 'destroy'])->name('users.destroy');
});
