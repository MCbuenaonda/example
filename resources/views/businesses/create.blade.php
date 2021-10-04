@extends('layouts.app')

@section('content')
    @include('layouts.partials.validation-error')
    @include('layouts.partials.back-button')

    <div class="container">
        <h2>Crear negocio</h2>

        <form action="{{ route('businesses.store') }}" method="POST">
            @include('businesses._form')
        </form>
    </div>
@endsection
