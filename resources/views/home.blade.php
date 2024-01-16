@extends('layouts.app')

@section('content')

<div class="container text-center my-3">
        <h1 class="my-5">Trains</h1>
        <div class="row g-4">
            @foreach ($trains as $train)
                
            <div class="col-4 border border-success border-3 rounded">
                <h3 class="my-2">{{ $train->azienda }}</h3>
                <h5 class="my-2">Treno numero: {{ $train->codice_treno }}</h5>
                <p class="my-2"><strong>Partenza: </strong>{{ $train->stazione_di_partenza }}</p>
                <p class="my-2"><strong>Arrivo: </strong>{{ $train->stazione_di_arrivo }}</p>
                <p class="my-2"><strong>Ora partenza: </strong>{{ $train->orario_di_partenza }}</p>
                <p class="my-2"><strong>Ora arrivo: </strong>{{ $train->orario_di_arrivo }}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection