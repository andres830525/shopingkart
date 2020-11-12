@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalle del producto') }}</div>
                 <a href="{{url('products') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Retornar a Productos</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--Agregar Productos--}}
                    <div class="row">
                        


                        <div class="col-6">
                            <<img src="{{$product->photo}}" width="300" height="450">
                                <h4> {{$product->name}}</h4>
                                <p>{{Str::limit(strtolower($product->description),50)}} </p>
                                <p><strong>Precio: </strong>{{$product->price}}</p>
                                
                        </div>
                        
                    </div>
                    {{--Agregar Productos--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
