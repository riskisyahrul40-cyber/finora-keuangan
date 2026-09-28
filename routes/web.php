<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

// Route khusus user yang sudah login
Route::middleware(['auth', 'verified'])->group(function () {

    // =========================
    // DASHBOARD
    // =========================
    Route::get('/dashboard', [TransaksiController::class, 'index'])
        ->name('dashboard');

    // =========================
    // TRANSAKSI
    // =========================
    Route::post('/transaksi', [TransaksiController::class, 'store'])
        ->name('transaksi.store');

    Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])
        ->name('transaksi.destroy');

    // =========================
    // LAPORAN
    // =========================
    Route::get('/laporan', [LaporanController::class, 'index'])
        ->name('laporan.index');

    // Export Excel / CSV
    Route::get('/laporan/export/excel', [LaporanController::class, 'exportExcel'])
        ->name('laporan.excel');

    // Tampilan laporan untuk PDF
    Route::get('/laporan/export/pdf', [LaporanController::class, 'exportPdf'])
        ->name('laporan.pdf');
});

require __DIR__.'/auth.php';