<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoanApplicationController;

// Route::middleware(['auth:api'])->group(function () {

//     // Loan application route
    Route::post('/loan-applications', [LoanApplicationController::class, 'store']);



    // Clear cache route
    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        return 'Cache cleared';
    });
// });
