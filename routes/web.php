<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Report\ReportController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
dd("ADfv");

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
//    GET
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/report', [ReportController::class, 'get'])->name('report.get');
    Route::get('/send-report', [ReportController::class, 'sendReport'])->name('send_report.get');

//    PATCH
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    //    DELETE
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
