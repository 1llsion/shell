<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return redirect()->route('loic');
});


Route::middleware('auth')->group(function () {
    Route::get('/chart/complaints/byMonth', [\App\Http\Controllers\DashboardController::class, 'getComplaintsByMonth'])->name('chart.getComplaintsByMonth');
    Route::get('/chart/complaints/byStatus', [\App\Http\Controllers\DashboardController::class, 'getComplaintsByStatus'])->name('chart.getComplaintsByStatus');

    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('complaints/years', [\App\Http\Controllers\ComplaintController::class, 'getYears'])->name('complaints.getYears');
    Route::get('complaints/export', [\App\Http\Controllers\ComplaintController::class, 'exportExcel'])->name('complaints.exportExcel');
    Route::post('complaints/{id}/action', [\App\Http\Controllers\ComplaintController::class, 'takingAction'])->name('complaints.takingAction');
    Route::post('complaints/{id}/done', [\App\Http\Controllers\ComplaintController::class, 'complaintDone'])->name('complaints.done');
    Route::resource('complaints', \App\Http\Controllers\ComplaintController::class);

    Route::resource('rules', \App\Http\Controllers\RuleController::class);

    Route::get('users/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show')->whereUuid('id');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('admins/{id}/change-password', [\App\Http\Controllers\AdminController::class, 'changePassword'])->whereUuid('id')->name('admins.change-password');
    Route::post('admins/{id}/change-password', [\App\Http\Controllers\AdminController::class, 'updatePassword'])->whereUuid('id')->name('admins.update-password');
    Route::resource('admins', \App\Http\Controllers\AdminController::class);
});

require __DIR__ . '/auth.php';

// Route::get('/loic', function () {
//     return view('loic');
// });