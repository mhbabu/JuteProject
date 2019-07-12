<?php

Route::group(['module' => 'SubCategory', 'middleware' => ['api'], 'namespace' => 'App\Modules\SubCategory\Controllers'], function() {

    Route::resource('SubCategory', 'SubCategoryController');

});
