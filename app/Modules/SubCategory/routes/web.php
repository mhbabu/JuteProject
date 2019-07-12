<?php

Route::group(['module' => 'SubCategory', 'middleware' => ['web'], 'namespace' => 'App\Modules\SubCategory\Controllers'], function() {

    Route::resource('SubCategory', 'SubCategoryController');

});
