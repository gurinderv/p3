@extends('layouts.master')


@section('title')
    The Hacker's Best Friend Toolkit
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop

@section('subheadline')
    Lorem Generator to Spam Your Friends
@stop

@section('content')
    
        Create spam text to send to your friends. Simply input the number of paragraphs and any options you wish, then copy/paste the resulting text into your email window. We currently limit you to 10 paragraphs of text... because 11 is just mean!
         <h1>Lorem Ipsum Generator</h1>
        <form method="post" action="/lorem">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
          Number of paragraphs (max 10): <input type="text" name="numParagraphs" alt="Number of Paragraphs" value='{{old('numParagraphs')}}'><p>
          
           @if(count($errors) > 0)    
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach            
            </ul>
        @endif  
            
          <input type="submit" value="Generate Text!">
        </form>


@stop

