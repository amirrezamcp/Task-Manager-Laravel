<?php

use App\Http\Controllers\Tasks\TaskController as Tasks;
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
Route::prefix('/')->group(function () {
    Route::get('', [Tasks::class, 'index'])->name('tasks_show');
    Route::post('', [Tasks::class, 'store'])->name('tasks_add');
    Route::delete('{task_id}', [Tasks::class, 'destroy'])->name('tasks_delete');
    Route::get('{task_id}', [Tasks::class, 'show'])->name('tasks_show_update');
    Route::put('{task_id}', [Tasks::class, 'update'])->name('tasks_update');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
