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

Route::auth();

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['uses'=>'ArticleController@index', 'as'=>'home']);
    Route::get('/{author}/articles', ['uses'=>'IndexController@authorArticles', 'as'=>'authors.articles']);
    Route::get('/about', ['uses'=>'IndexController@about', 'as'=>'about']);
    
    Route::group(['middleware' => ['auth']], function () {
    
        //-------Trash--------
        Route::get('articles/trash', ['uses'=>'IndexController@trash', 'as'=>'articles.trash']);
        Route::patch('articles/{article_id}/restore', ['uses'=>'ArticleController@restore', 'as'=>'articles.restore']);
        Route::delete('articles/{article_id}/erase', ['uses'=>'ArticleController@erase', 'as'=>'articles.erase']);
        //--------------------

        Route::resource('articles', 'ArticleController', ['except' => ['index','show']]);

        //----User profile----
        Route::get('/profile', ['uses'=>'UserController@profile', 'as'=>'users.profile']);
        Route::get('/profile/edit', ['uses'=>'UserController@edit', 'as'=>'users.edit']);
        Route::post('/profile/edit', ['uses'=>'UserController@update', 'as'=>'users.update']);
        Route::get('/profile/password', ['uses'=>'UserController@editPassword', 'as'=>'users.edit_password']);
        Route::post('/profile/password', ['uses'=>'UserController@updatePassword', 'as'=>'users.update_password']);
        //--------------------

        Route::post('/get_experience', 'UserController@getExperience');
        Route::post('/set_experience', 'UserController@setExperience');
    });

    Route::get('/articles/{article}', ['uses'=>'ArticleController@show', 'as'=>'articles.show']);
});
