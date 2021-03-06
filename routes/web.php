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

Route::middleware(['auth', 'web'])->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('admin')->as('admin.')->group(function () {
        Route::prefix('user-management')->as('user-management.')->group(function () {
            Route::get('users', function(){ return view('admin.user-management.users');})->name('users');
            Route::get('permissions', function(){ return view('admin.user-management.permissions');})->name('permissions');
            Route::resource('roles', \App\Http\Controllers\Admin\UserManagement\RolesController::class);
        });
    });
});

require __DIR__.'/auth.php';
