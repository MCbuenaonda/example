@extends('layouts.app')

@section('content')
    @include('layouts.partials.validation-error')
    @include('layouts.partials.back-button')

    <div class="container">
        <h1>Edit</h1>

        <form action="{{ route('companies.update', $company) }}" method="POST">
            @method('PUT')
            @include('companies._form')
        </form>
    </div>
@endsection
