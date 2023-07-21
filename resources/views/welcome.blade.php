@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')


<ul>
    @foreach ($trains as $train)
        <li>
            {{$train -> azienda }}
            {{$train -> stazione_di_partenza }}
            {{$train -> azienda }}
            {{$train -> azienda }}
            {{$train -> azienda }}


        </li>
    @endforeach
</ul>

@endsection