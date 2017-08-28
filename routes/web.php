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
        Route::get('/', 'HeaderController@index');
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
        Route::get('product/{id}','ProductController@edit');
        Route::post('product/edit','ProductController@save_edit');
        Route::get('post','PostController@index');
        Route::get('post/create','PostController@create');
        Route::post('post/create_post','PostController@create_post');
        Route::post('post/delete','PostController@delete');
        Route::get('post/{id}','PostController@edit');
        Route::post('post/edit','PostController@save_edit');
        //Post Category
        Route::get('post_category','PostCategoryController@index');
        Route::get('post_category/create','PostCategoryController@create');
        Route::post('post_category/create_post_category','PostCategoryController@create_post_category');
        Route::post('post_category/delete','PostCategoryController@delete');
        Route::get('post_category/{id}','PostCategoryController@edit');
        Route::post('post_category/edit','PostCategoryController@save_edit');
        //Gallery
        Route::get('gallery','GalleryController@index');
        Route::get('gallery/create','GalleryController@create');
        Route::post('gallery/create_gallery','GalleryController@create_gallery');
        Route::post('gallery/delete','GalleryController@delete');
        Route::get('gallery/{id}','GalleryController@edit');
        Route::post('gallery/edit','GalleryController@save_edit');
        //Footer
        Route::get('footer','FooterController@index');
        Route::get('footer/{id}','FooterController@edit');
        Route::post('footer/edit','FooterController@save_edit');

    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Gallery User
Route::get('/hinh-anh-cong-ty.html','MasterPageController@index');
Route::get('/san-pham.html','MasterPageController@index_product');
Route::get('/tin-tuc/{category}/{title}.html', 'MasterPageController@post_detail');
//Post-all
Route::get('/tin-tuc/{category}','MasterPageController@post_all');
Route::get('/gioi-thieu-{id}.html','MasterPageController@intro_detail');