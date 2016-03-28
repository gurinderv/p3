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
        'numUsers' => 'required'  //use comma for each, put in numeric to show secondary validation
        
    ]);
     
        $faker = \Faker\Factory::create();
        $output = " ";
        $numUsers = $request->input('numUsers');

        
        $array = Array();
        
        for($x = 0; $x < $request->input('numUsers'); $x++){
            $output .= $faker->name;
            $output .= '<br>';
            
        }

        //return printArray($num);
        //return $request->input('numUsers');
        return view('lorem.ipsum')->with('lipsum', $output);
    }
    

}
