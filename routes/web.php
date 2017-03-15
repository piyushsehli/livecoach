<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/trial', function () {
    return view('trial');
})->name('trial');

Route::get('/coaches', function () {
    return view('coaches');
})->name('coaches');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/* User Login And Register Routes */
// Authentication Routes...
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*Account verification*/
Route::get('register/confirm/{token}', 'Auth\ActivationController@confirmEmail');

// /*Resend Account Email verification*/
// Route::get('confirmation/resend', 'Auth\ActivationController@show');
// Route::post('confirmation/resend', 'Auth\ActivationController@resend');


/* Social Login Routes */
Route::get('/login/facebook', 'Auth\SocialLoginController@facebookRedirect')->name('login.facebook');
Route::get('/login/facebook/callback', 'Auth\SocialLoginController@facebookCallback');

Route::get('/login/google', 'Auth\SocialLoginController@googleRedirect')->name('login.google');
Route::get('/login/google/callback', 'Auth\SocialLoginController@googleCallback');
