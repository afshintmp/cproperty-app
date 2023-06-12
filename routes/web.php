<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PageContentController;
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
//    dump(auth()->user());
    return view('index');
})->name('index');

Route::get('/builds', [BuildController::class, 'show1'])->name('builds.index');
Route::get('/builds/{id}', [BuildController::class, 'show'])->name('builds.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
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


    Route::get('/page/plans', [PageContentController::class, 'edit'])->name('admin.page.plan.index');
    Route::post('/page/plans', [PageContentController::class, 'update'])->name('admin.page.plan.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/plans', [PlanController::class, 'index'])->name('plan.index');

Route::get('/basket/add/{plan}', [BasketController::class, 'add'])->name('basket.add');

Route::get('/checkout', [BasketController::class, 'checkout'])->name('checkout');


Route::get('file/create', [FileController::class, 'create'])->name('file.create');
Route::post('file/create', [FileController::class, 'upload'])->name('file.new');

Route::group(['prefix' => 'developer', 'middleware' => 'role:developer'], function () {
    Route::get('/', function () {
        dd('ok');
    })->name('developer.dashboard');
});

require __DIR__ . '/auth.php';
