@extends('master')
@section('title', 'Car')

@section('body')

<div>The name of the car is: {{$car->title}}. Is made by {{$car->producer}}</div>

@endsection