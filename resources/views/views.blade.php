@extends('master')
@section('title', 'All Cars')

@section('body')

<ul>
    @foreach ($cars as $car)
    
    <li><a href="/viewCar/{{$car->id}}">{{$car->title}}</a></li>
        
    @endforeach
</ul>

@endsection