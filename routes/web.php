<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\DoctorsController;
use App\Http\Controllers\Dashboard\DepartmentController;

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

Route::prefix('dashboard')->group(function () {
  Auth::routes();

  Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('profile')->group(function () {
      Route::get('/', [ProfileController::class, 'index'])->name('profile');
      Route::get('edit', [ProfileController::class, 'edit'])->name('profile.edit');
      Route::post('update', [ProfileController::class, 'update'])->name('profile.update');
      Route::get('edit-password', [ProfileController::class, 'edit_password'])->name('profile.edit_password');
      Route::post('update-password', [ProfileController::class, 'update_password'])->name('profile.update_password');
    });

    Route::resource('doctors', DoctorsController::class)->middleware('checkAdmin');

    Route::resource('departments', DepartmentController::class)->middleware('checkAdmin');
  });
});