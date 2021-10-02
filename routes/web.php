<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProsesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [DashboardController::class, 'dashboardHome'])->name('dashboard.user.home');
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard.user');
Route::post('store', [DashboardController::class, 'store'])->name('user.store');
Route::get('success', [DashboardController::class, 'success'])->name('success');
Route::get('/testing', [DashboardController::class, 'testing'])->name('testing.user');


Route::prefix('admin')->group(function () {
    Route::get('login', [CoreController::class, 'login'])->name('login');
    Route::post('auth', [CoreController::class, 'auth'])->name('auth');

    Route::middleware('auth', 'admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('detail/{uuid}', [AdminController::class, 'detail'])->name('detail');
        Route::get('edit/{uuid}', [AdminController::class, 'edit'])->name('edit');
        Route::patch('update/{uuid}', [AdminController::class, 'update'])->name('update');
        Route::delete('delete/{uuid}', [AdminController::class, 'delete'])->name('delete');

        // Action Status
        Route::get('export', [ProsesController::class, 'excel'])->name('excel');
        Route::get('print/{uuid}', [ProsesController::class, 'print'])->name('print');
        Route::post('/aktifasi/{uuid}', [ProsesController::class, 'status'])->name('status');

        Route::post('logout', [CoreController::class, 'logout'])->name('logout');
    });
    // add middleware here

});
