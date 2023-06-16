<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'developer', 'middleware' => ['auth', 'role:developer']], function () {
    Route::get('/', [DeveloperController::class, 'index'])->name('developer.dashboard');
    Route::get('/project/add', [DeveloperController::class, 'addProject'])->name('developer.project.add');
    Route::post('/project/add', [DeveloperController::class, 'createProject'])->name('developer.project.create');

    Route::get('/project/list', [DeveloperController::class, 'listProject'])->name('developer.project.list');
});
