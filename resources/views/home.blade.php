@extends('layouts.app')
@section('title', 'Treni')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @foreach ($trains as $train)
                    <div class="card text-white" style="width:18rem; background-color:rgb(73, 0, 0)">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $train->azienda }}</h5>
                            <h6 class="card-subtitle mb-2 text-white">{{ $train->codice_treno }}</h6>
                            <p class="card-text">In partenza da: {{ $train->stazione_di_partenza }} alle
                                {{ $train->orario_di_partenza }}</p>
                            <p class="card-text">In arrivo a: {{ $train->stazione_di_arrivo }} alle
                                {{ $train->orario_di_arrivo }}</p>
                            <p class="card-text">numero carrozze: {{ $train->numero_carrozze }}</p>
                            @if ($train->in_orario == 1)
                                <p class="text-success">Il treno è in orario</p>
                            @else
                                <p class="text-danger">Il treno è in ritardo</p>
                            @endif
                            @if ($train->cancellato == 1)
                                <p>Il treno è stato cancellato</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
