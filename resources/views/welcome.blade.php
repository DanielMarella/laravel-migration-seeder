@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')


<ul>
    @foreach ($trains as $train)
        <li class="mb-3">
            Azienda: <strong>{{$train -> azienda }}</strong> <br>
            Stazione di partenza: <strong>{{$train -> stazione_di_partenza }}</strong> <br>
            Stazione di arrivo:<strong> {{$train -> stazione_di_arrivo }}</strong><br>
            Orario di partenza:<strong> {{$train -> orario_di_partenza }}</strong><br>
            Orario di arrivo: <strong>{{$train -> orario_di_arrivo }}</strong><br>
            Codice treno: <strong>{{$train -> codice_treno }}</strong><br>
            Numero carrozze: <strong>{{$train -> numero_carrozze }}</strong><br>
            In orario: <strong>{{$train -> in_orario }}</strong><br>
            Cancellato:<strong> {{$train -> cancellato }}</strong><br>



        </li>
    @endforeach
</ul>

@endsection