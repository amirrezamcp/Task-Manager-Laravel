<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\Tasks\TaskController as Tasks;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Role;

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

Route::get('/', HomeController::class)->name('Home_page');

Route::prefix('tasks')->group(function () {
    Route::get('/', [Tasks::class, 'index'])->name('tasks_show')->middleware('people_login');
    Route::post('/', [Tasks::class, 'store'])->name('tasks_add');
    Route::delete('/{task_id}', [Tasks::class, 'destroy'])->name('tasks_delete');
    Route::get('/{task_id}', [Tasks::class, 'show'])->name('tasks_show_update');
    Route::put('/{task_id}', [Tasks::class, 'update'])->name('tasks_update');
});

Route::prefix('auth')->group(function() {
    Route::get('/logout', [LoginController::class,'logout'])->name('logout');

    Route::get('/login', [LoginController::class,'login'])->name('login_show');
    Route::post('/login', [LoginController::class,'store'])->name('login_user');

    Route::get('/register', [RegisterController::class,'register'])->name('register_show');
    Route::post('/register', [RegisterController::class,'store'])->name('register_add');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
