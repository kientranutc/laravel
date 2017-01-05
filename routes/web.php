<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','TestController@show');
Route::get('test','TestController@show');

Route::get('admin', function () {
    return view('admin.layout.master');
});

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'loaitin'], function() {

    	Route::get('danhsach','LoaitinController@danhsach');
    	// them
        Route::get('them', 'LoaitinController@getthem');
        Route::post('them','LoaitinController@postthem');
        // sua
        Route::get('sua/{id}','LoaitinController@getsua');
        Route::post('sua/{id}','LoaitinController@postsua' );
        // xoa
        Route::get('xoa/{id}','LoaitinController@getxoa');
    });
    Route::group(['prefix' => 'bantin'], function() {
      Route::get('them', function() {
          return view('admin.bantin.them');
      });
    });
    Route::group(['prefix' => 'quanlyanh'], function() {
        Route::any('anh', function() {
            return view('admin.anh.quanlyanh');
        });
    });
});
