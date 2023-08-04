<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\NewsController as NewsControllerAdmin;
use App\Http\Controllers\Admin\SystemConfigurationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\AboutController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\NewsController as NewsControllerPublic;
use App\Models\Employee;
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

    Route::get('/news', [NewsControllerPublic::class, 'show'])->name('news');
    Route::get('/news/{news:slug}', [NewsControllerPublic::class, 'showNewsById'])->name('news.detail');

    Route::get('/contact', [ContactController::class, 'show'])->name('contact');
});


Route::middleware('auth')->name('dashboard.admin.')->prefix('dashboard/admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/system', [DashboardController::class, 'showSystemConf'])->name('system');
    Route::patch('/system', [SystemConfigurationController::class, 'update'])->name('system.update');

    Route::get('/employees', [DashboardController::class, 'showEmployees'])->name('employees');
    Route::get('/employees-create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees-create', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::patch('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

    Route::get('/news', [DashboardController::class, 'showNews'])->name('news');
    Route::get('/news-create', [NewsControllerAdmin::class, 'create'])->name('news.create');
    Route::post('/news-create', [NewsControllerAdmin::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsControllerAdmin::class, 'edit'])->name('news.edit');
    Route::patch('/news/{news}', [NewsControllerAdmin::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsControllerAdmin::class, 'destroy'])->name('news.destroy');
});

require __DIR__ . '/auth.php';
