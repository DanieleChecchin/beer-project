<?php

use App\Http\Controllers\Admin\BeerController as BeerController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for beers
Route::resource('admin/beers', BeerController::class, ['as' => 'admin']);

// SoftDelete trash
Route::get('/deleted', [BeerController::class, 'deletedIndex'])->name('deleted.index');

// Permanent Delete
Route::delete("/beers/{beer}/permanent-delete", [BeerController::class, "permanentDelete"])->name("beer.permanent-delete");

// Restore
Route::patch("/beers/{beer}/restore", [BeerController::class, "restore"])->name("beer.restore");

