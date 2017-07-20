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
    return view('welcome');
});

Route::get('app',function(){
	return view('template/app');
});

Route::get('mainbody',function(){
	return view('template/body');
});

Route::get('upload',function(){
	return view('template/uploadtest');
});

Route::get('footer',function(){
	return view('template/footer');
});

Route::get('jokes',function(){
	return view('template/jokes');
});

Route::get('shayari',function(){
	return view('template/shayari');
});

Route::get('quotes',function(){
	return view('template/quotes');
});

Route::get('login',function(){
    return view('template/login');
});

Route::get('registration',function(){
    return view('template/registration');
});

Route::get('about',function(){
    return view('template/about');
});

Route::get('contact',function(){
    return view('template/contact');
});

Route::get('profile',function(){
	return view('template/profile');
});