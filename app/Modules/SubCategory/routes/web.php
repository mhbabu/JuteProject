<?php

Route::group(['module' => 'SubCategory', 'middleware' => ['web'], 'namespace' => 'App\Modules\SubCategory\Controllers'], function() {

    Route::get('sub-category/list', 'SubCategoryController@subCategoryList');
    Route::post('sub-category/get-list', 'SubCategoryController@getSubCategoryList');
    Route::get('sub-category/create', 'SubCategoryController@createSubCategory');
    Route::post('sub-category/store', 'SubCategoryController@storeSubCategory');
    Route::post('sub-category/store/{id}', 'SubCategoryController@storeSubCategory');
    Route::get('sub-category/edit/{id}', 'SubCategoryController@editSubCategory');
    Route::get('sub-category/delete/{id}', 'SubCategoryController@deleteSubCategory');

});
