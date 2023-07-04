<?php

use App\Http\Controllers\RealtorController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'realtor', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', [RealtorController::class, 'viewProfile'])->middleware(['realtorMiddleware'])
        ->name('realtor.dashboard');

    Route::get('/', [RealtorController::class, 'index'])->name('realtor.contactInfo.page');

    Route::get('/view-profile', [RealtorController::class, 'viewProfile'])->name('realtor.contactInfo.view')
        ->middleware(['realtorMiddleware']);

    Route::post('/info', [RealtorController::class, 'contactInfoStore'])->name('realtor.contactInfo.store');

    Route::post('/billing-info', [RealtorController::class, 'billingInfoStore'])
        ->name('realtor.billingInfo.store');

    Route::post('/General-info', [RealtorController::class, 'generalInfoStore'])
        ->name('realtor.GeneralInfo.store');

    Route::get('favourite-units', [RealtorController::class, 'favouriteUnits'])
        ->name('realtor.favouriteUnits.list');
});
