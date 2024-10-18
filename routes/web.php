<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\ForgotPasswordController as ForgotPassword;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\UserController as User;
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

Route::prefix('settings')->group(function () {
    Route::get('/', [User::class, 'settings'])->name('settings_show');
    
    Route::put('/{setting_id}', [User::class, 'update'])->name('settings_update');
});

Route::prefix('tasks')->group(function () {
    Route::get('/', [Tasks::class, 'index'])->name('tasks_show')->middleware('people_login');

    Route::post('/', [Tasks::class, 'store'])->name('tasks_add')->middleware('people_login');

    Route::delete('/{task_id}', [Tasks::class, 'destroy'])->name('tasks_delete')->middleware('people_login');

    Route::get('/{task_id}', [Tasks::class, 'show'])->name('tasks_show_update')->middleware('people_login');
    Route::put('/{task_id}', [Tasks::class, 'update'])->name('tasks_update')->middleware('people_login');

    Route::put('/{task_id}/done', [Tasks::class, 'done'])->name('tasks_done')->middleware('people_login');
});

Route::prefix('auth')->group(function() {
    Route::get('/logout', [LoginController::class,'logout'])->name('logout');

    Route::get('/login', [LoginController::class,'login'])->name('login_show');
    Route::post('/login', [LoginController::class,'store'])->name('login_user');

    Route::get('/register', [RegisterController::class,'register'])->name('register_show');
    Route::post('/register', [RegisterController::class,'store'])->name('register_add');
    
    Route::get('/forgot_password', [ForgotPassword::class, 'forgot_password'])->name('forgot_password_show');
    Route::post('/forgot_password', [ForgotPassword::class, 'sendResetLink'])->name('forgot_password');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
