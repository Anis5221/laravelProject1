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



// user details-----
// Route::get('user/details','StudentController@create')->name('user/details');
// Route::get('all/user','StudentController@index')->name('all.user');
// Route::post('insert/user','StudentController@store')->name('insert/user');
// Route::get('view/student/{id}','StudentController@show');
// Route::get('edit/student/{id}','StudentController@edit');
// Route::post('update/student/{id}','StudentController@update');
// Route::get('delete/student/{id}','StudentController@destroy');

Route::resource('student','StudentController');
// Book area----

Route::get('user/book','BookController@index')->name('book');
Route::get('all/book','BookController@allbook')->name('all.book');
Route::post('stor/book','BookController@stor')->name('store.book');
Route::get('view/book/{id}', 'BookController@show');
Route::get('edit/book/{id}', 'BookController@edit');
Route::post('update/book/{id}', 'BookController@update');
Route::get('delete/book/{id}','BookController@destroy');



// eloquent pages------
Route::get('/eloquent', 'HomeController@eloquent')->name('eloquent');
Route::get('/HasOne', 'AoooController@index')->name('hasOne');
Route::get('/Belongsto', 'PhoneController@index')->name('belonto');
Route::get('/Belongstomany','PootController@index')->name('belongstomany');
Route::get('/Hasmany', 'CaaatController@index')->name('hasmany');
Route::get('gouser/{id}', 'CaaatController@gouser');










