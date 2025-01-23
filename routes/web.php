<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/contact-us', 'contact-us')->name('contact-us');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/our-mission', 'our-mission')->name('our-mission');
Route::view('/our-services', 'our-services')->name('our-services');
Route::view('/propertie', 'propertie')->name('propertie');
Route::view('/', 'welcome')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('newsletter.subscribe');
Route::view('/bedroom-luxury-apartment', 'luxury4bed')->name('bedroom-luxury-apartment');
Route::view('/bedroom-luxury-2bed-apartment', 'luxury2bed')->name('bedroom-luxury-2bed-apartment');
Route::view('/luxury-4-bedroom-apartment', 'luxury4bedsq')->name('luxury-4-bedroom-apartment');
Route::view('/gikambura-kikuyu', 'gikamburakikuyu')->name('gikambura-kikuyu');
Route::view('/pricing-breakdown', 'Breakdownpricing')->name('pricing-breakdown');
