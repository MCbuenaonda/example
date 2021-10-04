@extends('layouts.app')

@section('content')
    @include('layouts.partials.back-button')

    <h2>Detalle de la compañia</h2>

    <div class="card shadow p-3 mb-5 bg-body rounded">
        <div class="card-body">
            <h4 class="card-title">
                <i class="fa fa-circle text-{{ (!$company->active) ? 'secondary' : 'success' }}" aria-hidden="true"></i> {{ $company->name }}
            </h4>
            <hr/>
            <div>
                @foreach ($company->businesses as $business)
                    <div class="ml-3">
                        - Productos de {{$business->name}}

                        <div class="ml-4 row">
                            @foreach ($business->products as $product)
                                <div class="col-md-4">
                                    <small>* {{$product->name}}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
