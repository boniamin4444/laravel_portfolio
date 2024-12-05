<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/contact/index', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitForm']);


Route::get('blogs/{id}', [BlogPostController::class, 'show'])->name('blogs.show');

Route::get('blogs/create', [BlogPostController::class, 'create'])->name('blogs.create');

Route::post('blogs', [BlogPostController::class, 'store'])->name('blogs.store');

Route::get('blogs/{id}/edit', [BlogPostController::class, 'edit'])->name('blogs.edit');

Route::put('blogs/{id}', [BlogPostController::class, 'update'])->name('blogs.update');

Route::delete('blogs/{id}', [BlogPostController::class, 'destroy'])->name('blogs.destroy');



Route::get('create', [AdminController::class, 'create'])->name('admin.create');

    // Store a new admin
    Route::post('store', [AdminController::class, 'store'])->name('admin.store');

    // Show a specific admin's details
  

    // Show the form for editing an existing admin
    Route::get('edit/{admin}', [AdminController::class, 'edit'])->name('edit');

    // Update an existing admin
    Route::put('update/{admin}', [AdminController::class, 'update'])->name('update');

    // Delete an admin
    Route::delete('destroy/{admin}', [AdminController::class, 'destroy'])->name('destroy');



Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');





Route::get('/admin', function () {
    return view('adminlayouts.app');
});




Route::get('/', function () {
    return view('welcome');
});
