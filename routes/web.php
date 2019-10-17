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

Route::get('/home', function(){
    return redirect('/');
});

Route::get('/', 'WelcomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/products', 'ProductController@index');

Route::get('/products/{slug}', 'ProductController@show');

Route::get('/cart', 'CartController@index');

Route::post('/add-to-cart/{slug}', 'CartController@addToCart');

Route::get('/checkout', 'CheckoutController@index');

Route::get('/login', 'Auth\LoginController@index')->name('login')->middleware('guest');

Route::post('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');

Route::post('/register', 'Auth\RegisterController@register')->name('register')->middleware('guest');

Route::post('/logout', 'Auth\LogoutController@logout')->name('logout')->middleware('auth');



//Admin Panel
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'AdminController@index');

    Route::get('/products', 'ProductController@adminIndex');

    Route::get('/products/create', 'ProductController@adminCreate');

    Route::post('/products/create', 'ProductController@adminPost');

    Route::delete('/products/{slug}/delete', 'ProductController@adminDelete');

    //Category
    Route::get('/category', 'CategoryController@adminIndex');

    Route::get('/category/create', 'CategoryController@adminCreate');

    Route::post('/category/create', 'CategoryController@adminPost');

    //SubCategory
    Route::get('/subcategory', 'SubCategoryController@adminIndex');

    Route::get('/subcategory/create', 'SubCategoryController@adminCreate');

    Route::post('/subcategory/create', 'SubCategoryController@adminPost');

    //Child Category
    Route::get('/childcategory', 'ChildCategoryController@adminIndex');

    Route::get('/childcategory/create', 'ChildCategoryController@adminCreate');

    Route::post('/childcategory/create', 'ChildCategoryController@adminPost');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
