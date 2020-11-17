@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selecione en Nuestros productos que tipo de producto desea pedir') }}</div>
                <a href="{{url('products1') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">1.Productos de Farmacia</a>
                <a href="{{url('products2') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">2.Productos de Licorera</a>
                <a href="{{url('products3') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">3.Restaurantes</a>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
