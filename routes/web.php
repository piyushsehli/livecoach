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


/* Coach Login And Register Routes */
Route::prefix('coach')->group(function(){
	// Authentication Routes...
	Route::post('login', 'CoachAuth\LoginController@login');
	Route::post('logout', 'CoachAuth\LoginController@logout')->name('coach.logout');

	// Registration Routes...
	Route::post('register', 'CoachAuth\RegisterController@register')->name('coach.register');

	// Password Reset Routes...
	Route::get('password/reset', 'CoachAuth\ForgotPasswordController@showLinkRequestForm')->name('coach.password.request');
	Route::post('password/email', 'CoachAuth\ForgotPasswordController@sendResetLinkEmail')->name('coach.password.email');
	Route::get('password/reset/{token}', 'CoachAuth\ResetPasswordController@showResetForm')->name('coach.password.reset');
	Route::post('password/reset', 'CoachAuth\ResetPasswordController@reset');

	/*Account verification*/
	Route::get('register/confirm/{token}', 'CoachAuth\ActivationController@confirmEmail');

});



/* User Login And Register Routes */
// Authentication Routes...
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::post('register', 'Auth\RegisterController@register')->name('register');

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
