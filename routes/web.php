<?php

use Illuminate\Support\Facades\Route;
// Import Controller Utama
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
// Import Controller di folder Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

// --- HALAMAN USER ---
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event', [EventController::class, 'show'])->name('event.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/ticket', [TicketController::class, 'ticket'])->name('ticket');

// --- HALAMAN ADMIN ---
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/events', [AdminEventController::class, 'index'])->name('admin.events');
    Route::get('/transactions', [DashboardController::class, 'transactions'])->name('admin.transactions');
});