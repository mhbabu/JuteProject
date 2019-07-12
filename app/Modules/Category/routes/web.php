<?php

Route::group(['module' => 'Category', 'middleware' => ['web'], 'namespace' => 'App\Modules\Category\Controllers'], function() {

    Route::get('category/list', 'CategoryController@categoryList');
    Route::post('category/get-list', 'CategoryController@getCategoryList');
    Route::get('category/create', 'CategoryController@createCategory');
    Route::post('category/store', 'CategoryController@storeCategory');
    Route::post('category/store/{id}', 'CategoryController@storeCategory');
    Route::get('category/edit/{id}', 'CategoryController@editCategory');
    Route::get('category/delete/{id}', 'CategoryController@deleteCategory');

});
