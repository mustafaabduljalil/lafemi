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

//Homepage
Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);

// Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Composer Routes
Route::get('composer','\Lubusin\Decomposer\Controllers\DecomposerController@index')->middleware('nice_artisan');

// Auth Routes
Auth::routes();

//Providers routes
Route::group(['prefix' => '/provider',  'middleware' => ['auth']], function() {
	// Create Profile Route
	Route::get('profile/create', 'UserController@create')->name('profile.create');

        // Save create Profile Route
	Route::post('profile/save_provider_profile_creation', 'UserController@createProviderProfile')->name('save_provider_profile_creation');

	// Edit Profile Route
	Route::get('profile/edit', 'UserController@edit_provider')->name('profile.edit');
       
        // Save edting Profile Route
	Route::post('profile/save_provider_profile_editing', 'UserController@editProviderProfile')->name('save_provider_profile_editing');

});

//Users routes
Route::group(['prefix' => '/',  'middleware' => ['auth']], function() {
	// Profile Route
	Route::get('profile', 'UserController@profile')->name('profile');

	// Edit Profile Route
	Route::get('profile/edit', 'UserController@edit')->name('profile.edit');
        
        // Save Edit Profile Route
	Route::post('profile/save_editing', 'UserController@saveNormalUserEditing')->name('edit_normal_user');

	// Dashboard Route
	Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
});

// OAuth Routes
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');