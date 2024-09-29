<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/reviews', 'pages.reviews')->name('reviews');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/branches', 'pages.branches')->name('branches');
Route::view('/terms_and_conditions', 'pages.terms_and_conditions')->name('terms_and_conditions');
Route::view('/profile', 'pages.profile')->name('profile');
Route::view('/my-orders', 'pages.myOrders')->name('my-orders');
Route::view('/my-packages', 'pages.myPackages')->name('my-packages');
Route::view('/cart', 'pages.cart')->name('cart');


Route::post('setlocale/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('setlocale');
