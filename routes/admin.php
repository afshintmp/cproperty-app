<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/plans', [PlanController::class, 'adminIndex'])->name('admin.plans.index');
    Route::get('/plans/{plan}/edit', [PlanController::class, 'edit'])->name('admin.plans.edit');
    Route::post('/plans/{plan}/edit', [PlanController::class, 'update'])->name('admin.plans.update');


    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/add', [UserController::class, 'add'])->name('admin.users.add');
    Route::post('/users/add', [UserController::class, 'create'])->name('admin.users.create');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/{user}/edit', [UserController::class, 'update'])->name('admin.users.update');
    Route::post('/users/{user}/change-password', [UserController::class, 'passwordUpdate'])->name('admin.users.passwordUpdate');

    Route::get('/page/plans', [PageContentController::class, 'edit'])->name('admin.page.plan.index');
    Route::post('/page/plans', [PageContentController::class, 'update'])->name('admin.page.plan.update');

    Route::get('/features', [FeatureController::class, 'list'])->name('admin.features.list');
    Route::post('/features', [FeatureController::class, 'create'])->name('admin.features.create');
    Route::post('/features/delete', [FeatureController::class, 'delete'])->name('admin.features.delete');

});
