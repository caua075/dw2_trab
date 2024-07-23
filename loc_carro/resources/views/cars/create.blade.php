@extends('layouts.main')
@section('title', 'Cadastro de Carros')

@section('content')
    <div class="container" id="cars-form">
        <h1>Cadastrar Carro</h1>
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" class="form-control" id="year" name="year" min="1950" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option selected>Selecione o Status...</option>
                    <option value="Disponível">Disponível</option>
                    <option value="Alugado">Alugado</option>
                    <option value="Manutenção">Manutenção</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem do Veículo</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <button type="submit" class="btn btn-danger">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>
@endsection
