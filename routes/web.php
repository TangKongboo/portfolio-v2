<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact', [PortfolioController::class, 'storeMessage'])->name('portfolio.contact');

// Temporary route to setup database easily on Render
Route::get('/setup-db', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh', [
            '--seed' => true,
            '--force' => true
        ]);
        return 'Database migrated and seeded successfully! You can now go back to the home page.';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
