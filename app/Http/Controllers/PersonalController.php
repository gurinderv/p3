<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;

class PersonalController extends Controller
{

    public function getIndex()
    {
        //return 'get lorem';
        return view('personal.index');
    }
    
    public function postIndex()
    {
    //$lipsum = new joshtronic\LoremIpsum();
    $lipsum = new Lorem();
    return $lipsum->paragraphs(4, 'p');
//        return 'post personal';
    }
    
    
/*    Route::get('/personal', function(){
    //$lipsum = new joshtronic\LoremIpsum();
    //require_once '\vendor\fzaninotto\faker\srcautoload.php';
    $faker = Faker\Factory::create();
    echo $faker->name;
    echo $faker->freeEmail;
    return $faker->company;
*/
}
