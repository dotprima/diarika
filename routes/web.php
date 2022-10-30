<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Contact;
use App\Http\Controllers\About;
use App\Http\Controllers\Catalog;
use App\Http\Controllers\Admin;
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

Route::get('/', [Home::class, 'index']);
Route::get('/about', [About::class, 'index']);
Route::get('/contact', [Contact::class, 'index']);
Route::get('/catalog', [Catalog::class, 'index']);
Route::get('/catalog/{id}', [Catalog::class, 'catalogInfo']);

Route::get('/dashboard', [Admin::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/product', [Admin::class, 'product'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/product/add', [Admin::class, 'addcatalog'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/product/diskon', [Admin::class, 'catalogdiskon'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/product/edit/{id}', [Admin::class, 'cataloginfo'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/dashboard/product/add', [Admin::class, 'storecatalog'])->middleware(['auth', 'verified'])->name('dashboard');
Route::put('/dashboard/add-catalog', [Admin::class, 'editcatalog'])->middleware(['auth', 'verified'])->name('dashboard');
Route::delete('/dashboard/add-catalog', [Admin::class, 'detelecatalog'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/dashboard/product/diskon', [Admin::class, 'storediskon'])->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';
