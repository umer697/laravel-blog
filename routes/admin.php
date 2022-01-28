<?php

// use Illuminate\Routing\Route;

Route::view(uri: '/backpanel', view: 'backpanel.dashboard.index')->name('backpanel.dashboard');

//user routes


Route::resource('backpenl/user','App\Http\Controllers\User\UserController');
// Route::get('/backpanel/users', 'App\Http\Controllers\User\UserController@index')->name('user.index');
// Route::get('/backpanel/users/create', 'App\Http\Controllers\User\UserController@create')->name('user.create');
// Route::post('/backpanel/users/create', 'App\Http\Controllers\User\UserController@store')->name('user.store');
// Route::get('/backpanel/{user}/edit', 'App\Http\Controllers\User\UserController@edit')->name('user.edit');
// Route::put('/backpanel/{user}/edit', 'App\Http\Controllers\User\UserController@update')->name('user.update');
// Route::delete('/backpanel/{user}/delete', 'App\Http\Controllers\User\UserController@destroy')->name('user.destroy');

//role routes


Route::get('/backpanel/role/{role}/assign-permission','App\Http\Controllers\User\RoleController@assignPermissionView')
   ->name('role.assign.permission');

Route::post('/backpanel/role/{role}/assign-permission','App\Http\Controllers\User\RoleController@assignPermission')
   ->name('role.store.permission');

Route::resource('backpanel/role','App\Http\Controllers\User\RoleController');

//permissions routes
Route::resource('backpanel/permission','App\Http\Controllers\User\PermissionController');

//category routes
Route::get('/backpanel/category/trashed','App\Http\Controllers\User\CategoryController@trashedCategory')
->name('category.trash');

Route::post('/backpanel/category/{category}/restore','App\Http\Controllers\User\CategoryController@restoreCategory')
->name('category.restore');

Route::delete('/backpanel/category/{category}/delete','App\Http\Controllers\User\CategoryController@permaDelCategory')
->name('category.permanent.delete');

Route::resource('backpanel/category','App\Http\Controllers\User\CategoryController');

//Post routes
Route::get('/backpanel/post/trashed','App\Http\Controllers\User\PostController@trashedPost')
->name('post.trash');

Route::post('/backpanel/post/{post}/restore','App\Http\Controllers\User\PostController@restorepost')
->name('post.restore');

Route::delete('/backpanel/post/{post}/delete','App\Http\Controllers\User\PostController@permaDelpost')
->name('post.permanent.delete');

Route::resource('backpanel/post','App\Http\Controllers\User\PostController');
