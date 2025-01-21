<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BeerController;

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
    return redirect()->route('admin.beers.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Routes for beers
Route::resource('admin/beers', App\Http\Controllers\Admin\BeerController::class, ['as' => 'admin']);

