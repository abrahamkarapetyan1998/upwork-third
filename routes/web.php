<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('home');
});*/


Auth::routes();
Route::middleware('location')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/work', 'HomeController@work')->name('work');
    Route::get('/pricing', 'HomeController@pricing')->name('pricing');
    Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');
    Route::get('/product', 'HomeController@product')->name('product');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/design-request', 'DashboardController@designRequest')->name('design-request');
    Route::post('/design-request', 'DashboardController@submitRequest')->name('design-request-post');
    Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');

    Route::get('/privacy-policy', 'HomeController@privacyPolices')->name('privacy-policy');
    Route::get('/terms-conditions', 'HomeController@termsConditions')->name('terms-conditions');
    Route::get('/cookies-policy', 'HomeController@CookiePolies')->name('cookies-policy');

    Route::post('/submit-contact', 'HomeController@submitContact')->name('submit-contact');
});


