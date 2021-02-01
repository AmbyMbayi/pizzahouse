@extends('layouts.layout')

@section('content')


<h2 class="header">Piza list</h2>

    @foreach ($pizzas as $pizza)
    <div>
       {{$pizza-> name}} - {{$pizza-> type}} - {{$pizza ->base}}
    </div>
    @endforeach

    @endsection

