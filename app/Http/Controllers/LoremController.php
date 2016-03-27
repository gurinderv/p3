<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;


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
        'numParagraphs' => 'required|numeric'  
    ]);
        
        $lipsum = new \Lorem();
        return $lipsum->paragraphs($request->input('numParagraphs'), 'p');
    }
    
}
