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
Route::get('/about', [Contact::class, 'index']);
Route::get('/contact', [About::class, 'index']);
Route::get('/catalog', [Catalog::class, 'index']);
Route::get('/catalog/{id}', [Catalog::class, 'catalogInfo']);

Route::get('/dashboard', [Admin::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
