<?php

use App\Http\Controllers\BuildController;
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
    return view('welcome');
});

Route::get('/builds', [BuildController::class, 'show1']);
Route::get('/builds/{id}', [BuildController::class, 'show'])->name('builds.show');

