<?php

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/', 'WelcomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/products', 'ProductController@index');

Route::post('/products', 'ProductController@index');

Route::get('/products/{slug}', 'ProductController@show');

Route::get('/cart', 'CartController@index');

Route::post('/add-to-cart/{slug}', 'CartController@addToCart');

Route::delete('/cart/product/{id}/delete', 'CartController@removeProductFromCart');

Route::put('/cart/product/{id}/qty', 'CartController@updateCartQty');

Route::get('/cat/{category}/{subcategory}/{childcategory}', 'ProductController@showChildCategories');

Route::get('/cat/{category}/{subcategory}/{childcategory}/{subchild}', 'ProductController@showSubChildCategories');

Route::get('/cat/{category}', 'ProductController@showCategories');

Route::get('/cat/{category}/{subcategory}', 'ProductController@showSubCategories');

Route::get('/checkout', 'CheckoutController@index')->middleware('auth');

Route::post('/checkout', 'CheckoutController@checout')->middleware('auth');

Route::get('/orders', 'OrderController@getOrderHistory')->middleware('auth');

Route::get('/checkout/{orderid}', 'CheckoutController@success');

// Route::get('/login', 'Auth\LoginController@index')->name('login')->middleware('guest');

Route::post('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');

Route::post('/register', 'Auth\RegisterController@register')->name('register')->middleware('guest');

Route::get('/logout', 'Auth\LogoutController@logout')->name('logout')->middleware('auth');

Route::get('/auth/{provider}', 'SocialloginController@login')->middleware('guest');

Route::get('/auth/{provider}/callback', 'SocialloginController@callback')->middleware('guest');

Route::get('/privacy', function () {
    return view('privacy.index');
});

Route::get('terms', function () {
    return view('terms.index');
});

Route::get('/search', 'SearchController@search');

Route::post('/search', 'SearchController@postSearch');

//Admin Panel
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'AdminController@index');


    Route::post('/upload/images', 'ImageController@store');

    Route::get('/products', 'ProductController@adminIndex');

    Route::get('/products/create', 'ProductController@adminCreate');

    Route::post('/products/create', 'ProductController@adminPost');

    Route::get('/products/{slug}/edit', 'ProductController@adminEdit');

    Route::put('/products/{slug}/edit', 'ProductController@adminPut');

    Route::delete('/product/image/{id}/delete', 'ImageController@adminDelete');

    Route::delete('/products/{slug}/delete', 'ProductController@adminDelete');

    //Category
    Route::get('/category', 'CategoryController@adminIndex');

    Route::get('/category/create', 'CategoryController@adminCreate');

    Route::post('/category/create', 'CategoryController@adminPost');

    Route::get('/category/{slug}/edit', 'CategoryController@adminEdit');

    Route::put('/category/{slug}/edit', 'CategoryController@adminPut');

    Route::delete('/category/{slug}/delete', 'CategoryController@adminDelete');

    //SubCategory
    Route::get('/subcategory', 'SubCategoryController@adminIndex');

    Route::get('/subcategory/create', 'SubCategoryController@adminCreate');

    Route::post('/subcategory/create', 'SubCategoryController@adminPost');

    Route::get('/subcategory/{slug}/edit', 'SubCategoryController@adminEdit');

    Route::put('/subcategory/{slug}/edit', 'SubCategoryController@adminUpdate');

    Route::delete('/subcategory/{slug}/delete', 'SubCategoryController@adminDelete');

    //Child Category
    Route::get('/childcategory', 'ChildCategoryController@adminIndex');

    Route::get('/childcategory/create', 'ChildCategoryController@adminCreate');

    Route::post('/childcategory/create', 'ChildCategoryController@adminPost');

    Route::get('/childcategory/{slug}/edit', 'ChildCategoryController@adminEdit');

    Route::put('/childcategory/{slug}/edit', 'ChildCategoryController@adminPut');

    Route::delete('/childcategory/{slug}/delete', 'ChildCategoryController@adminDelete');

    //Sub Child Category
    Route::get('/subchildcategory', 'SubChildCategoryController@adminIndex');

    Route::get('/subchildcategory/create', 'SubChildCategoryController@adminCreate');

    Route::post('/subchildcategory/create', 'SubChildCategoryController@adminPost');

    Route::get('/subchildcategory/{slug}/edit', 'SubChildCategoryController@adminEdit');

    Route::put('/subchildcategory/{slug}/edit', 'SubChildCategoryController@adminPut');

    Route::delete('/subchildcategory/{slug}/delete', 'SubChildCategoryController@adminDelete');

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

    Route::get('/size', 'SizeController@adminIndex');

    Route::get('/size/create', 'SizeController@adminCreate');

    Route::post('/size/create', 'SizeController@adminStore');

    Route::get('/size/{slug}/edit', 'SizeController@adminEdit');

    Route::put('/size/{slug}/edit', 'SizeController@adminPut');

    Route::delete('/size/{slug}/delete', 'SizeController@adminDelete');

    Route::get('/color', 'ColorController@adminIndex');

    Route::get('/color/create', 'ColorController@adminCreate');

    Route::post('/color/create', 'ColorController@adminStore');

    Route::get('/color/{slug}/edit', 'ColorController@adminEdit');

    Route::put('/color/{slug}/edit', 'ColorController@adminPut');

    Route::delete('/color/{slug}/delete', 'ColorController@adminDelete');

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

    Route::get('/orders', 'OrderController@adminIndex');

    Route::get('/coupon', 'CouponController@adminIndex');

    Route::post('/coupon', 'CouponController@adminStore');

    Route::group(['prefix' => 'request'], function () {
        Route::get('/product', 'RequestController@getProductRequests');

        Route::get('/product/{slug}', 'RequestController@showProductRequest');

        Route::post('/product/{slug}/approve', 'RequestController@approveProductRequest');

        Route::get('/customer', 'CustomerRequestController@index');

        Route::get('/customer/create', 'CustomerRequestController@create');

        Route::post('/customer/create', 'CustomerRequestController@store');
    });
});
