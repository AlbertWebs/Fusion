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
Route::get('/find-candidates', [HomeController::class, 'index'])->name('homepage');

Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/our-sectors', [HomeController::class, 'our_sectors'])->name('our-sectors');


Route::get('/find-your-dream-job', [HomeController::class, 'find_your_dream_job'])->name('find-your-dream-job');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/the-company', [HomeController::class, 'company'])->name('company');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slung}', [HomeController::class, 'service'])->name('service');
Route::get('/terms-and-conditions', [HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/copyright', [HomeController::class, 'copyright'])->name('copyright');
