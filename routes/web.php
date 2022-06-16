<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/the-company', [HomeController::class, 'company'])->name('company');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/terms-and-conditions', [HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/copyright', [HomeController::class, 'copyright'])->name('copyright');
