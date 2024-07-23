@extends('layouts.main')
@section('title', 'Editar '. $cars->model)

@section('content')
    <div class="container" id="cars-form">
        <h1>Editando: {{$cars->model}}</h1>
        <form action="/cars/update/{{$cars->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="model" name="model" value="{{$cars->model}}" required>
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{$cars->brand}}" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" class="form-control" id="year" name="year" min="1950" value="{{$cars->year}}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option selected>Selecione o Status...</option>
                    <option value="Disponível" {{$cars->status == "Disponível" ? "selected='selected'" : ""}}>Disponível</option>
                    <option value="Alugado" {{$cars->status == "Alugado" ? "selected='selected'" : ""}}>Alugado</option>
                    <option value="Manutenção" {{$cars->status == "Manutenção" ? "selected='selected'" : ""}}>Manutenção</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem do Veículo</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="/img/cars/{{$cars->image}}" alt="{{$cars->model}}" class="mt-2 img-preview">
            </div>

            <button type="submit" class="btn btn-danger">Editar</button>
            <a href="/dashboard" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
