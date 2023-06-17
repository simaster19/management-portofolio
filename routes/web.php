<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthenticationController;

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

Route::get('/', [ViewController::class, 'index'])->name('main_personal');
Route::get('/detail/{slug}', [ViewController::class, 'show'])->name('detail_personal');
Route::post('/messages', [MessageController::class, 'store'])->name('store');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

    Route::resource('/users', UserController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/skills', SkillController::class);

    Route::get('/messages', [MessageController::class, 'index'])->name('message');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('detail');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('hapus');
});

Route::get('/admin', [AuthenticationController::class, 'index'])->name('login');
Route::post('/admin', [AuthenticationController::class, 'login']);
