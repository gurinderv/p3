@extends('layouts.master')


@section('title')
    THBFT: Lorem Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/show.css" type='text/css' rel='stylesheet'>
@stop

@section('subheadline')
    Lorem Generator to Spam Your Friends
@stop

@section('content')
    
        You may now copy and paste the following text into an email to send to your friends!<p>
         
        {{ $lipsum }}

@stop

