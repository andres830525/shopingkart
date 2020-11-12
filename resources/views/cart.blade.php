@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Carrito de compras') }}</div>

                 <a href="{{url('products') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Retornar a Productos</a>

                 <div class="flash-message">
       @foreach (['danger', 'warning', 'success', 'info'] as $msg)
         @if(Session::has('alert-' . $msg))

         <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
         @endif
       @endforeach
     </div> <!-- end .flash-message -->

                 

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{--Agregar Detalle carrito--}}

                    <?php
                    $valor=0
                    ?>
                    @if(session('cart'))
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio unitario</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio Total</th>
                                <th scope="col">Foto</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        @foreach(session('cart') as $id => $details)
                        <?php $valor += $details['price'] * $details['quantity'] ?>
                        <tbody>
                            <tr>
                                <th scope="row"> {{$details['name']}}</th>
                                <td> S./ {{$details['price']}}</th>
                                <td> {{$details['quantity']}}</th>
                                <td> ${{$details['price']*$details['quantity']}}</th>
                                <td> <img src="{{$details['photo']}}" width="50" height="50"></th>
                                <td> <a href="{{url('borrar-producto/'.$id) }}" class="btn btn-primary  btn-block" role="button" aria-pressed="true">Eliminar Producto</a></th>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    @endif
                    <table align="right">
                        <th>
                            <div class="container" class="badge badge-primary text-wrap" style="width: 10rem;">
                    <p></p>
                    <p>Valor S./{{$valor}}</p>
                    <p>IVA S./{{$valor*0.19}}</p>
                    <p>Valot Total S./{{$valor+$valor*0.19}}</p>
                    </div>
                    </th>
                    </table>
                    
                    {{--Agregar Detalle carrito--}}
                </div>
                <a href="{{url('borrar') }}" class="btn btn-warning " role="button" aria-pressed="true">Borrar Productos</a>
                <div class="alert alert-warning alert-dismissable">
               
                <a href="{{url('pagar') }}" class="btn btn-success"  role="button" aria-pressed="true">Pagar</a>

                

                
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
