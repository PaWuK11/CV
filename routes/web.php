<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\StudyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about_me', [AboutController::class, 'index'])->name('about');

Route::get('/study', [StudyController::class, 'index'])->name('study');

Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
