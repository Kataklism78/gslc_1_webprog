@extends('main')

@section('title')
    Home
@endsection

@section('container')

<h1>Hello World</h1>
  
@if (count($datas) === 1)

Kamu punya data 1 
    
@elseif(count($datas) === 3)

kamu punya data 3  
    
@endif

    
@endsection

