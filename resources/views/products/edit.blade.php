@extends('layouts.app')

@section('content')
    @include('layouts.partials.validation-error')
    @include('layouts.partials.back-button')

    <div class="container">
        <h1>Edit</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            @include('products._form')
        </form>
    </div>
@endsection
