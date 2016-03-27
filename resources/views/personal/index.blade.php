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
          Input something: <input type="text" name="test"><p>
            <input type="submit" value="testsubmit">
        </form>

@stop

