<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SystemConfigurationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\AboutController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\NewsController;
use App\Models\SystemConfiguration;
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


Route::name('public.')->group(function () {
    Route::get('/', [HomeController::class, 'show'])->name('index');
    Route::get('/about', [AboutController::class, 'show'])->name('about');

    Route::get('/news', [NewsController::class, 'show'])->name('news');
    Route::get('/news/{id}', [NewsController::class, 'showNewsById'])->name('news-detail');

    Route::get('/contact', [ContactController::class, 'show'])->name('contact');
});

Route::get('/h', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->name('dashboard.admin.')->prefix('dashboard/admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/system', [DashboardController::class, 'showSystemConf'])->name('system');
    Route::patch('/system', [SystemConfigurationController::class, 'update'])->name('system.update');

    Route::get('/employees', [DashboardController::class, 'showEmployees'])->name('employees');
});

require __DIR__ . '/auth.php';
