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
// ALL

Route::get('/', 'AllController@show');

Route::get('/All/index', 'AllController@index');

// ABOUT

Route::get('/about', 'AboutController@show')->name('about');

Route::get('/about/{id}/destroy', 'AboutController@destroy');

Route::get('/about/{id}/edit', 'AboutController@edit');

Route::post('/about/{id}/update', 'AboutController@update');

Route::get('/about/create', 'AboutController@create')->name('about.create');

Route::post('/about/store', 'AboutController@store')->name('about.store');


// CONTACT

Route::get('/contact', 'ContactController@show');

Route::get('/contact/{id}/destroy', 'ContactController@destroy');


// PORTFOLIO

Route::get('/portfolio', 'PortfolioController@show');

Route::get('/portfolio/{id}/destroy', 'PortfolioController@destroy');

// SERVICE

Route::get('/service', 'ServiceController@show');

Route::get('/service/{id}/destroy', 'ServiceController@destroy');


// TEAM

Route::get('/team', 'TeamController@show');

Route::get('/team/{id}/destroy', 'TeamController@destroy');


// TESTIMONIAL

Route::get('/testimonial', 'TestimonialController@show');

Route::get('/testimonial/{id}/destroy', 'TestimonialController@destroy');

