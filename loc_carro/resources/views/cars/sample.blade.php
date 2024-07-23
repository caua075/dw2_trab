@extends('layouts.main')
@section('title', 'Carros - Detalhes')

@section('content')
    <div class="container">
        <div class="row" id="container-show">
            <div class="col-md-12">
                <h1>Detalhes do Carro</h1>
            </div>
            @foreach ($cars as $car)
                <div class="col-md-6 p-3" id="image-container-show">
                    <img src="/img/cars/{{ $car->image }}" alt="{{ $car->model }}" class="img-fluid">
                </div>
                <div class="col-md-6" id="desc-car-show">
                    <h2>{{ $car->model }}</h2>
                    <p><strong>Marca:</strong> {{ $car->brand }}</p>
                    <p><strong>Ano:</strong> {{ $car->year }}</p>

                    <a href="/cars/show/{{$car->id}}" class="btn btn-danger">Saiba Mais</a>
                </div>
                <hr class="m-2 p-2">
            @endforeach
        </div>
    </div>
@endsection