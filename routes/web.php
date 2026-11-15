<?php

use App\Http\Controllers\ContactEnquiryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/casa-vee', 'pages.casa-vee')->name('casa-vee');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactEnquiryController::class, 'store'])->name('contact.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
