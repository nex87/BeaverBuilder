<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('pageAbout');
})->name('pageAbout');

Route::get('/feedback', function () {
    return view('pageFeedback');
})->name('pageFeedback');

Route::post('/feedback/sended', 'feedbackController@submit')->name('feedback-form');

Route::get('/addProduct', function () {
    return view('pageAddProduct');
})->name('pageAddProduct');

Route::get('/products/all', 'addProductController@allProducts')->name('allProducts');

Route::post('/addProduct/added', 'addProductController@submit')->name('addProduct-form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

