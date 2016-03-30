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
        $this->validate($request, [
        'numUsers' => 'required|numeric' 
        
    ]);
     
        $faker = \Faker\Factory::create();

        $nameArray = Array();
        for($x = 0; $x < $request->input('numUsers'); $x++){
            $nameArray[$x] = $faker->name;  //need to store this as a key value pair then in view call the key.
        }
        
        $ccArray = Array();
        
        for($x = 0; $x < $request->input('numUsers'); $x++){
            $ccArray[$x] = $faker->creditCardDetails;
        }
        return view('personal.result')->with('array', $ccArray)->with('name',$nameArray);
    }
    

}
