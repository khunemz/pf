<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    //Page Controller
    Route::get('/', [
        'uses' => 'PageController@index',
        'as' => 'page.index'
    ]);

    Route::get('getauth',[
        'uses' => 'PageController@getauth',
        'as' => 'page.getauth'
    ]);


    //AdminController
    Route::post('signin',[
        'uses' => 'AdminController@signin',
        'as' => 'admin.signin'
    ]);

    Route::post('signup', [
        'uses' => 'AdminController@signup',
        'as' => 'admin.signup'
    ]);

    Route::get('signout', [
       'uses' => 'AdminController@signout',
        'as' => 'admin.signout'
    ]);

    //Blogpost
    Route::get('blog',[
        'uses' => 'BlogController@index',
        'as' => 'blog.index'
    ]);

    Route::get('blog/create',[
        'uses' => 'BlogController@create',
        'as' => 'blog.create'
    ]);

    Route::post('store', [
        'uses' => 'BlogController@storeblog',
        'as' => 'blog.storeblog'
    ]);

});
