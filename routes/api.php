<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/images', 'ImageController@store');

Route::get('/get-mega-menu-data', 'MegaMenuController@getMenuData');

Route::post('/child-category/image-upload', 'ImageController@imageUpload');

Route::post('/sub-child-category/image-upload', 'ImageController@imageSubChildCategoryUpload');
