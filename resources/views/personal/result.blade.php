@extends('layouts.master')


@section('title')
    THBFT: Personal Information Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('subheadline')
   Personal Information Generator
@stop

@section('content')
       
         <p>Below is the information you requested. Enjoy your new found wealth!</p>
      
        <p class="returnResult">
<!--  {{ $x = 0 }} -->
        @foreach ($array as $arr)
            Name: {{$name[$x]}} <br>
            Card Type: {{$arr['type']}} <br>
            Card Number: {{$arr['number']}}<br>
            Card Expiration: {{$arr['expirationDate']}}<p>
          <!--  {{$x += 1}} -->
        @endforeach  
            <p>
        </p>
        
@stop

