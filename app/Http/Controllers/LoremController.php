<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;
use Lorem;

class LoremController extends Controller
{
    
    public function getIndex()
    {
        //return 'get lorem';
        return view('lorem.index');
    }
    
    public function postIndex(Request $request)
    {
        $this->validate($request, [
        'numParagraphs' => 'required|numeric|max:10|min:1'  
    ]);
        
        $lipsum = new Lorem();
        $output = $lipsum->paragraphs($request->input('numParagraphs'), 'p');
        return view('lorem.ipsum')->with('lipsum', $output);
    }
    
}
