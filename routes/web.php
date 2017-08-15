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

Route::get('/', 'MasterController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/',function (){return view('admin.index');});
        Route::get('logo', 'HeaderController@index');
        Route::post('header/update', 'HeaderController@update');
        Route::get('menu', 'MenuController@index');
        Route::post('menu/update', 'MenuController@update');
        Route::get('menu/create', 'MenuController@create');
        Route::post('menu/create_menu', 'MenuController@create_menu');
        Route::get('menu/{id}', 'MenuController@edit');
        Route::post('menu/edit', 'MenuController@save_edit');
        Route::get('slider', 'SliderController@index');
        Route::get('slider/create', 'SliderController@create');
        Route::post('slider/create_slider', 'SliderController@create_slider');
        Route::post('slider/delete', 'SliderController@delete');
        Route::get('slider/{id}', 'SliderController@edit');
        Route::post('slider/edit', 'SliderController@save_edit');
        Route::get('introduce','IntroductionController@index');
        Route::get('introduce/create','IntroductionController@create');
        Route::post('introduce/create_introduce','IntroductionController@create_introduce');
        Route::post('introduce/delete','IntroductionController@delete');
        Route::get('introduce/{id}','IntroductionController@edit');
        Route::post('introduce/edit', 'IntroductionController@save_edit');
        Route::get('promotion','PromotionController@index');
        Route::get('promotion/{id}','PromotionController@edit');
        Route::post('promotion/edit','PromotionController@save_edit');
        Route::get('product','ProductController@index');
        Route::get('product/create','ProductController@create');
        Route::post('product/create_product','ProductController@create_product');
        Route::post('product/delete','ProductController@delete');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
