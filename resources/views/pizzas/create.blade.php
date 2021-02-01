@extends('layouts.layout')

@section('content')


<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        <label for="name">Your name</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza type:</label>
        <select name="type" id="type">
            <option value="magarita">Magarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="type">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="volcano">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <label for="price">Price</label>
        <input type="number" name="price">
        <input type="submit" value="order Pizza">
    </form>
</div>
  
   

    @endsection

