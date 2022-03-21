@php
    $sales = config('sales');
 @endphp

@extends('layout.main')

@section('content')

<!-- Jumbotron  -->
<div class="jumbotron">
    <figure>
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="logo jumbotron">
    </figure>
</div>

<!-- Section Main-Series  -->
<div class="main-series">
    <div class="container">
        @foreach($books as $id => $book)
        <div class="card-serie">
            <a href="{{ route('comic', ['id' => $id]) }}"><img src="{{ $book['thumb'] }}" alt="serie.type" /></a> 
            <h5> {{ $book['title'] }}</h5>
        </div>
        @endforeach
        <div class="load"><button>LOAD MORE</button></div>
    </div>
</div>

<section id="shop">
    <div class="container">
         <div class="card-img">
            @foreach($sales as $sale)
            <figure>
                <div class="immagine">
                    <img src="{{ asset("images$sale[url]") }}" alt="{{$sale['description']}}" />
                </div>
                <div class="text">{{$sale['text']}}</div>
            </figure>
            @endforeach
        </div> 
    </div>
</section>

@endsection