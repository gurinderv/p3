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
    <link href="test.css" type='text/css' rel='stylesheet'>
@stop

@section('subheadline')
    result of cc data
@stop

@section('content')
       
         <h1>Personal Info Results</h1>
      <!--  {{ $x = 0 }} -->
        @foreach ($array as $arr)
            Name: {{$name[$x]}} <br>
            Card Type: {{$arr['type']}} <br>
            Card Number: <br>
            Card Expiration: <br>
            Card CVV: <br>
          <!--  {{$x += 1}} -->
<p>
        @endforeach   
@stop

