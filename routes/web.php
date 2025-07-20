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

Route::get('/', 'Frontend\IndexController@index')->name('frontend.index');
Route::get('/about', 'Frontend\AboutController@index')->name('frontend.about');
Route::get('/contact', 'Frontend\ContactController@index')->name('frontend.contact');
Route::get('/product', 'Frontend\ProductController@index')->name('frontend.product');
Route::get('/details', 'Frontend\ProductDetailsController@index')->name('frontend.productDetails');
Route::get('/productDetails/{id}', 'Frontend\ProductDetailsController@show')->name('frontend.productDetails');
Route::get('/silver', 'Frontend\SilverController@index')->name('frontend.silver');
Route::get('/diamond', 'Frontend\DiamondController@index')->name('frontend.diamond');
Route::get('/gold', 'Frontend\GoldController@index')->name('frontend.gold');




Auth::routes();

Route::get('/login', 'HomeController@redirectAdmin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);
    Route::resource('banner', 'Backend\BannerController', ['names' => 'admin.banner']);
    Route::resource('rate', 'Backend\RateController', ['names' => 'admin.rate']);
    Route::resource('product', 'Backend\ProductController', ['names' => 'admin.product']);
    



    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
