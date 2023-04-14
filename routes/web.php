<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'welcome'])->name('welcome');

// Route::get('layouts.main', [PagesController::class, 'main'])->name('main');

Route::get('class', [PagesController::class, 'class'])->name('class');

Route::get('team', [PagesController::class, 'team'])->name('team');

Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');

Route::get('achievements', [PagesController::class, 'achievements'])->name('achievements');

Route::get('article', [PagesController::class, 'article'])->name('article');

Route::get('blog', [PagesController::class, 'blog'])->name('blog');

Route::get('footer', [PagesController::class, 'footer'])->name('footer');