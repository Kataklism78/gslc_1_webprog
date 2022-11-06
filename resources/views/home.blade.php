@extends('main')

@section('title')
    Home
@endsection

@section('container')

<h1>Hello World</h1>
  
<div class= "bg-black" style="height: 500px">
    <div class="" >
        
        <img src="{{ $img }}" class="img-fluid" alt="...">
        @for ($i = 1; $i <= 5; $i++)   

        <div class="text-center text-white bg-primary rounded-5 m-2 pt-3" style="">
           
            <h2>Anda sedang berada di dalam loop ke {{ $i }}</h2>
            @if ($i != 5)
                <h2>Selanjutnya adalah {{$i+1}}</h2>
            @elseif ($i == 5)
                <h4>Anda sudah tiba di loop terakhir</h4>
            @endif    
        </div>
    @endfor
    </div>
</div>

    
@endsection

