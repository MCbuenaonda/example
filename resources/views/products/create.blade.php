@extends('layouts.app')

@section('content')
    @include('layouts.partials.validation-error')
    @include('layouts.partials.back-button')

    <div class="container">
        <h2>Crear producto</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @include('products._form')
        </form>
    </div>
@endsection
