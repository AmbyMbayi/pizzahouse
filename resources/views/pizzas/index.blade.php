@extends('layouts.layout')

@section('content')


<h2 class="header">Piza list</h2>

<p class="message">{{session('message')}}</p>

<a href="/pizzas/create">Create Pizza</a>

    @foreach ($pizzas as $pizza)
    <div>
       {{$pizza-> name}} - {{$pizza-> type}} - {{$pizza ->base}}
     
    </div>
   
    @endforeach

    @endsection

