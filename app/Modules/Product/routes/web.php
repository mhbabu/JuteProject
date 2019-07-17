<?php

Route::group(['module' => 'Product', 'middleware' => ['web'], 'namespace' => 'App\Modules\Product\Controllers'], function() {

    Route::get('product/list', 'ProductController@productList');
    Route::post('/product/get-list', 'ProductController@getProductList');
    Route::get('product/create', 'ProductController@createProduct');
    Route::post('product/store', 'ProductController@storeProduct');
    Route::post('product/store/{id}', 'ProductController@storeProduct');
    Route::get('product/edit/{id}', 'ProductController@editProduct');
    Route::get('product/delete/{id}', 'ProductController@deleteProduct');

});
