@extends('layouts.main')

@section('content')
    <div class="container d-flex">
        @foreach ($products as $product)
            <div class="box-product">
                <div class="first-img">
                    <img src="{{ $product['frontImage'] }}" alt="{{ $product['name'] }}">
                </div>
                <div class="marchio"> {{ $product['brand'] }} </div>
                <h4> {{ $product['name'] }} </h4>
                <div class="price"> {{ $product['price'] }}<span> FullPrice </span></div>
                <div class="badge.type" class="discount"> badge . value </div>
                <div class="sostenibile"> Tag </div>
                <div class="heart">&hearts;</div>
            </div>
        @endforeach

    </div>
@endsection
