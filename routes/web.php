<?php

Route::get('login','LoginController@login');
Route::post('users/login','LoginController@UsersLogin');
Route::get('logout','LoginController@logout');
