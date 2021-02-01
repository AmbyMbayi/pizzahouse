@extends('layouts.layout')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">The type is -{{$pizza ->type}}</p>
    <p class="type">The price is -{{$pizza ->price}}</p>
    <p class="type">The base is -{{$pizza ->base}}</p>
    <ul>
        @foreach ( $pizza-> toppings as $topping )
            <li>{{$topping}}</li>
        @endforeach
    </ul>

    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizza" class="back">Back to Pizza List</a>

@endsection