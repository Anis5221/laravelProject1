<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@homepage');
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/contect', function () {
    return view('pages.contect');
})->name('contect');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/service', function () {
    return view('pages.service');
})->name('service');

Route::get('write/post', 'WriteController@writePost')->name('write.post');
Route::get('all/post', 'WriteController@allPost')->name('all.post');


// Category section here--------
Route::get('edit/category/{id}', 'CategoryController@editCategory');
Route::post('delete/{id}', 'CategoryController@deleteCategory');
Route::get('view/category/{id}', 'CategoryController@viewCategory');
Route::get('all/category', 'CategoryController@allCategory')->name('all.category');
Route::get('add/category', 'CategoryController@addCategory')->name('add.category');
Route::post('store/category', 'Postcontroller@storeCategory')->name('store.category');
Route::post('update/category/{id}', 'CategoryController@updateCategory');

// Category Post----
Route::post('upload/post', 'WriteController@uploadPost')->name('postthecategory');
Route::post('updatep/post/{id}', 'WriteController@updatePosts');
Route::get('delete/post/{id}', 'WriteController@deletePost');
Route::get('view/post/{id}', 'WriteController@viewPost');
Route::get('edit/post/{id}', 'WriteController@editPost');










