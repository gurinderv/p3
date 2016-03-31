<?php

Route::get('/', 'Controller@getIndex');


Route::group(['middleware' => ['web']], function () {
   
    Route::get('/lorem','LoremController@getIndex');
    Route::post('lorem','LoremController@postIndex');

    Route::get('/personal', 'PersonalController@getIndex');
    Route::post('/personal', 'PersonalController@postIndex');

    
});
