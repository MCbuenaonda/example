@extends('layouts.app')

@section('content')
    <h2>Listado de Negocios</h2>

    <div class="float-right my-3">
        <a href="{{ route('businesses.create') }}" class="btn btn-primary">Crear</a>
    </div>

    <table class="table table-stripped table-sm">
        <thead class="bg-dark text-white">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <td>Empresa</td>
                <th>Activo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($businesses as $business)
                <tr>
                    <td scope="row">{{ $business->id }}</td>
                    <td>{{ $business->name }}</td>
                    <td>{{ (isset($business->company)) ? $business->company->name : '-' }}</td>
                    <td>{{ $business->active }}</td>
                    <td>
                        <a href="{{ route('businesses.show', $business) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('businesses.edit', $business) }}" class="btn btn-primary">Editar</a>
                        <eliminar-component info-id={{$business->id}} info={{'businesses'}} />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $businesses->links() }}


@endsection
