<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    dd(auth()->user()->can('add build'));
    return view('welcome');
});

Route::get('/builds', [BuildController::class, 'show1']);
Route::get('/builds/{id}', [BuildController::class, 'show'])->name('builds.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/plans', [PlanController::class, 'adminIndex'])->name('admin.plans.index');
    Route::get('/plans/{plan}/edit', [PlanController::class, 'edit'])->name('admin.plans.edit');
    Route::post('/plans/{plan}/edit', [PlanController::class, 'update'])->name('admin.plans.update');


    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/{user}/edit', [UserController::class, 'update'])->name('admin.users.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/plans', [PlanController::class, 'index']);

Route::get('/basket/add/{plan}', [BasketController::class, 'add'])->name('basket.add');


require __DIR__ . '/auth.php';
