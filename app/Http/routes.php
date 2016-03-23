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

Route::get('/', function () {
    //Welcome message, information about page, test if worthy
    return view('welcome');
});



/*Route::get('/lorem', function(){
    //$lipsum = new joshtronic\LoremIpsum();
    $lipsum = new Lorem();
    return $lipsum->paragraphs(4, 'p');   
}); */

Route::get('/lorem','LoremController@getIndex');
Route::post('lorem','LoremController@postIndex');

Route::get('/book/create', 'Controller@getCreate');

Route::get('/faker', function(){
    //$lipsum = new joshtronic\LoremIpsum();
    //require_once '\vendor\fzaninotto\faker\srcautoload.php';
    $faker = Faker\Factory::create();
    echo $faker->name;
    echo $faker->freeEmail;
    return $faker->company;
});

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
    //
});
