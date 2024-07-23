@extends ('layouts.main')
@section('title', 'Carros')
@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1 dashboard-title-container">
            <h1>Carros</h1>
        </div>
        <div class="col-md-10 offset-md-1 dashboard-title-container">
            <table class="table table-striped">
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
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection