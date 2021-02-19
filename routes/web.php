<?php

// Articles
Route::get('/', 'ArticleController@index')->name('article.home');
Route::get('/explore', 'ArticleController@explore')->name('article.explor');
Route::get('/articles/create', 'ArticleController@create')->name('article.create');
Route::post('/articles/create', 'ArticleController@store');
Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('article.edit');
Route::patch('/articles/{article}', 'ArticleController@update');
Route::get('/articles/{article}/{slug}', 'ArticleController@show')->name('article.show');
Route::get('/articles/{article}', 'ArticleController@destroy')->name('article.destroy');

// Categories
Route::get('/categories', 'CategoryController@index')->name('categories.home');
Route::get('/categories/create', 'CategoryController@create')->name('category.create');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('category.edit');
Route::post('/categories/create', 'CategoryController@store');
Route::get('/categories/{category}/{slug}', 'CategoryController@show')->name('category.show'); 
Route::patch('/categories/{category}', 'CategoryController@update');
Route::get('/categories/{category}', 'CategoryController@destroy')->name('category.destroy');

// Auth
Auth::routes(['register' => false]);
// Add user
Route::get('/user/create', 'UserController@adduser')->name('user.create');
Route::post('/user/create', 'UserController@store')->name('user.store');

// Profile
Route::get('/profile/{user}/edit','UserController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'UserController@update');
Route::delete('/profile/{user}/delete','UserController@delete')->name('profile.destroy');
Route::get('/profile/{user}/{slug}', 'UserController@index')->name('profile');

// Search
Route::any('/search', 'SearchController@index')->name('search');

// Dashboard
Route::get('/dashboard', 'AdminController@index')->name('dashboard.home');
Route::get('/dashboard/articles', 'AdminController@articles')->name('articles');
Route::get('/dashboard/categories', 'AdminController@categories')->name('categories');
Route::get('/dashboard/roles', 'AdminController@roles')->name('roles');
Route::get('/dashboard/users', 'AdminController@users')->name('users');

Route::get('/roles','RolesController@index')->name('roles.all');
//Route::get('/roles/{role}/{slug}','RolesController@show')->name('roles.show');
Route::get('/roles/show','RolesController@edit')->name('roles.edit');
Route::get('/roles/show','RolesController@destroy')->name('roles.destroy');
Route::post('/roles/new', 'UserController@storeRole');

// Route::get('/abilities/new', 'UserController@createAbility');
// Route::post('/abilities/new', 'UserController@storeAbility');

// Route::get('/roles/assign', 'UserController@assign');
// Route::post('/roles/assign', 'UserController@assignTo');










