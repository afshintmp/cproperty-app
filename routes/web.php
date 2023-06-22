<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\FeatureController;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/plans', [PlanController::class, 'index'])->name('plan.index');

Route::get('/basket/add/{plan}', [BasketController::class, 'add'])->name('basket.add');

Route::get('/checkout', [BasketController::class, 'checkout'])->name('checkout');


Route::get('/tank-you', [BasketController::class, 'tankspage'])->name('tanks');

Route::get('/map', function () {
    return view('test');
});
Route::get('file/create', [FileController::class, 'create'])->name('file.create');
Route::post('file/create', [FileController::class, 'upload'])->name('file.new');
Route::post('coupon', [CouponController::class, 'store'])->name('coupon');
Route::get('coupon/remove', [CouponController::class, 'remove'])->name('coupon.remove');



require __DIR__ . '/auth.php';
require __DIR__ . '/developer.php';
require __DIR__ . '/realtor.php';
require __DIR__ . '/admin.php';
