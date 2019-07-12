<?php

Route::group(['module' => 'Vendor', 'middleware' => ['web'], 'namespace' => 'App\Modules\Vendor\Controllers'], function() {

    Route::get('vendor/list', 'VendorController@vendorList');
    Route::post('vendor/get-list', 'VendorController@getVendorList');
    Route::get('vendor/create', 'VendorController@createVendor');
    Route::post('vendor/store', 'VendorController@storeVendor');
    Route::post('vendor/store/{id}', 'VendorController@storeVendor');
    Route::get('vendor/edit/{id}', 'VendorController@editVendor');
    Route::get('vendor/delete/{id}', 'VendorController@deleteVendor');

});
