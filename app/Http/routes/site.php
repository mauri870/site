<?php
// Site Routes
Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
});