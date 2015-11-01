<?php
// Site Routes
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect']
], function() {
    //Localized routes
    Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
});

//Blog
Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);