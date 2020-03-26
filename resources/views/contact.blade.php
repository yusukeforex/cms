@extends('layouts.app')

@section('content')

    <h2>contact</h2>

    @if (count($people))
      <ul>
        @foreach($people as $person)
          <li>{{$person}}</li>
        @endforeach
      </ul>
    @endif
    
  @stop

@section('footer')
  <script>alert('this is js alert');</script>
  @stop