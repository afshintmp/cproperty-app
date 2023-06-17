<?php

use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'developer', 'middleware' => ['auth', 'role:developer']], function () {
    Route::get('/', [DeveloperController::class, 'index'])->name('developer.dashboard');
    Route::get('/project/add', [DeveloperController::class, 'addProject'])->name('developer.project.add');
    Route::post('/project/add', [DeveloperController::class, 'createProject'])->name('developer.project.create');

    Route::get('/project/list', [DeveloperController::class, 'listProject'])->name('developer.project.list');

    Route::get('/project/{build}/edit', [DeveloperController::class, 'editProject'])->name('developer.project.edit');
    Route::post('/project/{build}/edit', [DeveloperController::class, 'updateProject'])->name('developer.project.update');


    Route::get('/project/{build}/unit/add', [UnitController::class, 'add'])->name('developer.unit.add');
    Route::post('/project/{build}/unit/add', [UnitController::class, 'create'])->name('developer.unit.create');

});
