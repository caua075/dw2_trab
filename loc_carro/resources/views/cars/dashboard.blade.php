@extends('layouts.main')
@section('title', 'Carros - Dashboard')

@section('content')

    <div class="container">
        <div class="col-md-10 offset-md-1 dashboard-title-container">
            <h1>Carros</h1>
        </div>
        <div class="col-md-10 offset-md-1 dashboard-table-container">
            <div class="background-box">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td><a href="/cars/show/{{$car->id}}">{{ $car->model }}</a></td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->year }}</td>
                                <td>{{ $car->status }}</td>
                                <td class="d-flex inline actions">
                                    <a href="/cars/edit/{{ $car->id }}" class="btn btn-info m-1"><ion-icon name="create-outline"></ion-icon></a>
                                    <form action="/cars/{{ $car->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1"><ion-icon name="trash-outline"></ion-icon></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
