<?php
// Site Routes
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect']
], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
});