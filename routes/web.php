<?php

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

// routes/web.php

Route::view('/', 'welcome')->name('welcome'); 


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
 Route::view('frontendpages.vision&mission', 'frontendpages.vision&mission')->name('frontendpages.vision&mission');
 Route::view('frontendpages.Admissionform', 'frontendpages.Admissionform')->name('frontendpages.Admissionform');
 Route::view('frontendpages.courses', 'frontendpages.courses')->name('frontendpages.courses');
 Route::view('frontendpages.examination', 'frontendpages.examination')->name('frontendpages.examination');
 Route::view('frontendpages.images', 'frontendpages.images')->name('frontendpages.images');
 Route::view('frontendpages.fatwa', 'frontendpages.fatwa')->name('frontendpages.fatwa');
 Route::view('frontendpages.vedioes', 'frontendpages.vedioes')->name('frontendpages.vedioes');
 Route::view('frontendpages.feedback', 'frontendpages.feedback')->name('frontendpages.feedback');
 Route::view('frontendpages.zakaat', 'frontendpages.zakaat')->name('frontendpages.zakaat');
 Route::view('frontendpages.counselling', 'frontendpages.counselling')->name('frontendpages.counselling');
 Route::view('frontendpages.books', 'frontendpages.books')->name('frontendpages.books');



require __DIR__.'/auth.php';
