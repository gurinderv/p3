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

/*Route::get('/', function () {
    //Welcome message, information about page, test if worthy
    return view('welcome');
});*/

Route::get('/', 'Controller@getIndex');

/*Route::get('/lorem', function(){
    //$lipsum = new joshtronic\LoremIpsum();
    $lipsum = new Lorem();
    return $lipsum->paragraphs(4, 'p');   
}); */



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
   
    Route::get('/lorem','LoremController@getIndex');
    Route::post('lorem','LoremController@postIndex');

    Route::get('/personal', 'PersonalController@getIndex');
    Route::post('/personal', 'PersonalController@postIndex');

    
});
