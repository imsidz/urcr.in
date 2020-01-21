<?php

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/', 'WelcomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/products', 'ProductController@index');

Route::get('/products/{slug}', 'ProductController@show');

Route::get('/cart', 'CartController@index');

Route::post('/add-to-cart/{slug}', 'CartController@addToCart');

Route::get('/cat/{category}/{subcategory}/{childcategory}', 'ProductController@showChildCategories');

Route::get('/checkout', 'CheckoutController@index')->middleware('auth');

Route::post('/checkout', 'CheckoutController@checout')->middleware('auth');

Route::get('/checkout/{orderid}', 'CheckOutController@success');

// Route::get('/login', 'Auth\LoginController@index')->name('login')->middleware('guest');

Route::post('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');

Route::post('/register', 'Auth\RegisterController@register')->name('register')->middleware('guest');

Route::get('/logout', 'Auth\LogoutController@logout')->name('logout')->middleware('auth');

Route::get('/auth/{provider}', 'SocialloginController@login')->middleware('guest');

Route::get('/auth/{provider}/callback', 'SocialloginController@callback')->middleware('guest');


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

    Route::delete('/category/{slug}/delete', 'CategoryController@adminDelete');

    //SubCategory
    Route::get('/subcategory', 'SubCategoryController@adminIndex');

    Route::get('/subcategory/create', 'SubCategoryController@adminCreate');

    Route::post('/subcategory/create', 'SubCategoryController@adminPost');

    Route::delete('/subcategory/{slug}/delete', 'SubCategoryController@adminDelete');

    //Child Category
    Route::get('/childcategory', 'ChildCategoryController@adminIndex');

    Route::get('/childcategory/create', 'ChildCategoryController@adminCreate');

    Route::post('/childcategory/create', 'ChildCategoryController@adminPost');

    Route::delete('/childcategory/{slug}/delete', 'ChildCategoryController@adminDelete');

    Route::get('/style', 'StyleController@adminIndex');

    Route::get('/style/create', 'StyleController@adminCreate');

    Route::post('/style/create', 'StyleController@adminStore');

    Route::get('/style/{slug}/edit', 'StyleController@adminEdit');

    Route::put('/style/{slug}/edit', 'StyleController@adminPut');

    Route::delete('/style/{slug}/delete', 'StyleController@adminDelete');

    Route::get('/material', 'MaterialController@adminIndex');

    Route::get('/material/create', 'MaterialController@adminCreate');

    Route::post('/material/create', 'MaterialController@adminStore');

    Route::get('/material/{slug}/edit', 'MaterialController@adminEdit');

    Route::put('/material/{slug}/edit', 'MaterialController@adminUpdate');

    Route::delete('/material/{slug}/delete', 'MaterialController@adminDelete');

    Route::get('/banners', 'BannerController@adminIndex');

    Route::get('/banners/create', 'BannerController@adminCreate');

    Route::post('/banners/create', 'BannerController@adminStore');

    Route::get('/banners/{id}/edit', 'BannerController@adminEdit');

    Route::put('/banners/{id}/edit', 'BannerController@adminUpdate');

    Route::delete('/banners/{id}/delete', 'BannerController@adminDelete');

    Route::get('/sellers', 'SellerController@index');

    Route::get('/seller-requests', 'SellerController@getRequests');

    Route::post('/seller-request/approve', 'SellerController@sellerApprove');

    Route::post('/seller-request/decline', 'SellerController@sellerDecline');
});

Route::get('/home', 'HomeController@index')->name('home');
