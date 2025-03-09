<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WomenInTechController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});











Route::middleware(['auth'])->group(function () {
    // Step 1: Details form
    Route::get('/women-in-tech/register', [WomenInTechController::class, 'showRegistrationForm'])
         ->name('womenintech.register');
    Route::post('/women-in-tech/register', [WomenInTechController::class, 'storeDetails'])
         ->name('womenintech.storeDetails');

    // Step 2: Document upload form
    Route::get('/women-in-tech/documents', [WomenInTechController::class, 'showDocumentUploadForm'])
         ->name('womenintech.documents');
    Route::post('/women-in-tech/documents', [WomenInTechController::class, 'storeDocuments'])
         ->name('womenintech.storeDocuments');
});






Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/pending', [AdminController::class, 'pending'])->name('admin.pending');
    Route::get('/accepted', [AdminController::class, 'acceptedApplications'])->name('admin.accepted');
    Route::get('/rejected', [AdminController::class, 'rejectedApplications'])->name('admin.rejected');
    Route::get('/missing-docs', [AdminController::class, 'missingDocuments'])->name('admin.missing-docs');
    Route::get('/users', [AdminController::class, 'allUsers'])->name('admin.users');
    Route::put('/applications/{application}/update-status', [AdminController::class, 'updateStatus'])->name('admin.applications.updateStatus');
});









require __DIR__.'/auth.php';
