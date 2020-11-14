@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                <a href="{{url('home/') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Volver a buscar mas Articulos</a>
                <a href="{{url('cart/') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Carrito de Compras</a>
                <div class="flash-message">
       @foreach (['danger', 'warning', 'success', 'info'] as $msg)
         @if(Session::has('alert-' . $msg))

         <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
         @endif
       @endforeach
     </div> 
                {{--Agregar Productos--}}
                <div class="row">
                    @foreach($products as $product)


                    <div class="col-6">
                        <img src="{{$product->photo}}" width="150" height="250">
                            <h4> {{$product->name}}</h4>
                            <p>{{Str::limit(strtolower($product->description),50)}} </p>
                            <p><strong>Precio: </strong>{{$product->price}}</p>

                            <a href="{{url('add-to-cart/'.$product->id) }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Agregar a el carrito</a>
                            <a href="{{url('product-detail/'.$product->id) }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Detalle</a>

                    </div>
                    @endforeach
                </div>
                {{--Agregar Productos--}}
            </div>
        </div>
    </div>
</div>
</div>
@endsection
