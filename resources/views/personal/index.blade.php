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
    
        Select up to 5 suckers you want to scam. The system will pull from our database of users and return their names and credit card information. Enjoy!
        <p>
        <form method="post" action="/personal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
            How many suckers: 
           <select name="numUsers" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
           </select> 
                
                <p>
        @if(count($errors) > 0)    
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach            
            </ul>
        @endif
            
            <input type="submit" class="submit" value="Get Me Suckers!">
        </form>

@stop

