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
    
    public function postIndex(Request $request)
    {
       // dd($request->all()); - this is a die dump test to show the values in the request
        
    $this->validate($request, [
        'test' => 'required|numeric'  //use comma for each, put in numeric to show secondary validation
        
    ]);
        
    //$lipsum = new joshtronic\LoremIpsum();
    //$lipsum = new Lorem();
    //return $lipsum->paragraphs(4, 'p');
        return 'post personal';
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
