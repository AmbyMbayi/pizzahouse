@extends('layouts.layout')

@section('content')


<h2>Piza list</h2>
@for ($i = 0; $i < count($pizza); $i++) <p>{{ $pizza[$i]['type'] }}</p>
    @endfor

    @foreach ($pizza as $piz)
    <div>
        {{ $loop->index }} {{ $piz['type'] }} - {{ $piz['base'] }}
    </div>
    @endforeach

    @endsection