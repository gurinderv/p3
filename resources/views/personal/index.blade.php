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
    Personal Information Generator
@stop

@section('content')
    
        Select the number of suckers you want to scam. The system will pull from our database of users and return their names and credit card information. Enjoy!
         <h1>Personal Info Generator</h1>
        <form method="post" action="/personal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
            Input something: <input type="text" name="test" value='{{old('test')}}'>  
            
            {{-- ****putting in the value of old and test if validation fails it'll replace with the old text so the user can fix it. put on all fields to if validation fails the user doesn't have to retype everything --}}
            
            <p>
          
        @if(count($errors) > 0)    
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach            
            </ul>
        @endif
            
            <input type="submit" value="testsubmit">
        </form>

@stop

