<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController as UserEventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryAdminContorller;
use App\Http\Controllers\Admin\PartnerController;

// --- HALAMAN USER ---
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event', [UserEventController::class, 'show'])->name('event.show');
Route::get('/checkout', [UserEventController::class, 'checkout'])->name('checkout');
Route::get('/ticket', [TicketController::class, 'ticket'])->name('ticket');

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// --- HALAMAN ADMIN ---
//Grouping untuk URL berawalan \Admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Rute login admin
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    //Mengamankan Route Administrasi di balik tembok (Middleware)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('events', EventAdminController::class);
        Route::get('transactions', [TransactionController::class, 'transactions'])->name('transactions');
        Route::resource('categories', CategoryAdminContorller::class);
        Route::resource('partners', PartnerController::class);
    });
});