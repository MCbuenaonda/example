@extends('layouts.app')

@section('content')
    @include('layouts.partials.back-button')

    <h1>Show Negocio</h1>

    <div class="card shadow p-3 mb-5 bg-body rounded">
        <div class="card-body">
            <h4 class="card-title">
                <i class="fa fa-circle text-{{ (!$business->active) ? 'secondary' : 'success' }}" aria-hidden="true"></i> {{ $business->name }}
            </h4>

            <h5 class="card-title">Empresa: {{ (isset($business->company)) ? $business->company->name : '-' }}</h5>

            <div class="ml-4">
                Productos

                <div class="ml-4">
                    @foreach ($business->products as $product)
                        <div>
                            <small>* {{$product->name}}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
