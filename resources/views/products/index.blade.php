@extends('layouts.app')

@section('content')
    <h2>Listado de Productos</h2>

    <div class="float-right my-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Crear</a>
    </div>

    <table class="table table-stripped table-sm">
        <thead class="bg-dark text-white">
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Producto</th>
                <th>Negocio</th>
                <th>Empresa</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td scope="row">{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->business->name }}</td>
                    <td>{{ $product->business->company->name }}</td>
                    <td>{{ (isset($product->category)) ? $product->category->name : '-' }}</td>
                    <td>{{ $product->qty }} pz</td>
                    <td>$ {{ $product->amount }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Editar</a>
                        <eliminar-component info-id={{$product->id}} info={{'products'}} />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $products->links() }}


@endsection
