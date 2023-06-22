<?php

use App\Http\Controllers\RealtorController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'realtor', 'middleware' => ['auth']], function () {

    Route::get('/', [RealtorController::class, 'index'])->name('realtor.dashboard');
    Route::get('/view-profile', [RealtorController::class, 'viewProfile'])->name('realtor.contactInfo.view');
    Route::post('/info', [RealtorController::class, 'contactInfoStore'])->name('realtor.contactInfo.store');
    Route::post('/General-info', [RealtorController::class, 'generalInfoStore'])->name('realtor.GeneralInfo.store');
});
