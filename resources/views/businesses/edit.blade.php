@extends('layouts.app')

@section('content')
    @include('layouts.partials.validation-error')
    @include('layouts.partials.back-button')

    <div class="container">
        <h1>Editar Negocio</h1>

        <form action="{{ route('businesses.update', $business) }}" method="POST">
            @method('PUT')
            @include('businesses._form')
        </form>
    </div>
@endsection
