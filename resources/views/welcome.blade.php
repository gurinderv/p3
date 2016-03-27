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
    Available Tools Below:
@stop

@section('content')
    
    <a href="/lorem">Lorem Generator for Spamming Your Friends</a>

<p>
    
    <a href="/personal">Free Money via Personal Information Generator</a>
    
    <p>
    
@stop

