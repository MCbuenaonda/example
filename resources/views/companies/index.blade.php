@extends('layouts.app')

@section('content')

    <div class="clearfix">
        <h2 class="float-left">Listado de Compañias</h2>

        <div class="float-right my-3">
            <a href="{{ route('companies.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    <div class="card shadow p-3 mb-5 bg-body rounded">
        <div class="card-body">
            <table class="table table-striped table-sm">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Activo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td scope="row">{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->active }}</td>
                            <td>
                                <a href="{{ route('companies.show', $company) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('companies.edit', $company) }}" class="btn btn-primary">Editar</a>
                                <eliminar-component info-id={{$company->id}} info={{'companies'}} />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            {{ $companies->links() }}
        </div>
    </div>



@endsection
