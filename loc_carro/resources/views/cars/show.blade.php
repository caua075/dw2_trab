@extends('layouts.main')
@section('title', 'Carro - ' . $cars->model)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 img-container">
                <img src="/img/cars/{{ $cars->image }}" alt="{{ $cars->model }}" class="img-fluid mt-4">
            </div>
            <div class="col-md-8">
                <div class="card card-custom">
                    <div class="card-header">
                        Detalhes do Carro
                    </div>
                    <div class="card-body">
                        <h5>Modelo: {{ $cars->model }}</h5>
                        <h5>Marca: {{ $cars->brand }}</h5>
                        <h5>Ano: {{ $cars->year }}</h5>
                        @if ($cars->status == 'Alugado' || $cars->status == 'Manutenção')
                            <p>O carro está em manutenção ou alugado.</p>
                        @else
                            <button class="btn btn-danger">Alugar Carro</button>
                        @endif
                        <a href="/cars/sample" class="btn btn-secondary">Voltar a amostra de Carros</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
