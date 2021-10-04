@extends('layouts.app')

@section('content')
    @include('layouts.partials.back-button')

    <h1>Detalles del producto</h1>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Producto: {{ $product->name }}</h4>
            <p class="card-text">Cantidad: {{ $product->qty }} pzs</p>
            <p class="card-text">Precio: $ {{ $product->amount }}</p>
            <p class="card-text">Categoria: {{ $product->category->name }}</p>
            <p class="card-text">Codigo: {{ $product->code }}</p>
            <p class="card-text">Negocio: {{ $product->business->name }}</p>
            <p class="card-text">Empresa: {{ $product->business->company->name }}</p>
        </div>
    </div>

@endsection
