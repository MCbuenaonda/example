@extends('layouts.app')

@section('content')
    @include('layouts.partials.validation-error')
    @include('layouts.partials.back-button')

    <div class="container">
        <h2>Crear compañia</h2>

        <form action="{{ route('companies.store') }}" method="POST">
            @include('companies._form')
        </form>
    </div>
@endsection
