<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/resources', function () {
    return view('resources');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/tools', function () {
    return view('tools');
});
Route::get('/contact', function () {
    return view('contact');
});

 Route::get('login', 'AuthController@index');
 Route::post('post-login', 'AuthController@postLogin'); 
 Route::get('registration', 'AuthController@registration');
 Route::post('post-registration', 'AuthController@postRegistration'); 
 Route::get('dashboard', 'AuthController@dashboard'); 
 Route::get('logout', 'AuthController@logout');
 Route::post('products', 'ProductController@addProduct')->name('product.add');
 Route::post('products/update', 'ProductController@updateProduct')->name('product.update');
 Route::get('edit-product/{id}', 'ProductController@edit');
 Route::get('all-products', 'ProductController@getProducts');
 Route::get('barcode-product/{id}', 'ProductController@getBarcode');
 // Route::delete('products/{id}', 'ProductController@deleteProduct');

Route::get('payment', 'AuthController@payment');

// delete-product/{{$product->id')}};
Route::get('delete-product/{id}', 'ProductController@deleteProduct');

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');