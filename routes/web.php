<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController as UserEventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

// --- HALAMAN USER ---
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event', [UserEventController::class, 'show'])->name('event.show');
Route::get('/checkout', [UserEventController::class, 'checkout'])->name('checkout');
Route::get('/ticket', [TicketController::class, 'ticket'])->name('ticket');

// --- HALAMAN ADMIN ---
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/events', [AdminEventController::class, 'index'])->name('admin.events');
    Route::get('/transactions', [DashboardController::class, 'transactions'])->name('admin.transactions');
});