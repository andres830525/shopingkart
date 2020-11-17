@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Carrito de compras') }}</div>

                 <a href="{{url('home') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Seguir de compras</a>

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
                    <table class="table table-responsive">
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
                                <td> ${{$details['price']}}</th>
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
                    <p>Valor ${{$valor}}</p>
                    <p>IVA ${{$valor*0.19}}</p>
                    <p>Valot Total ${{$valor+$valor*0.19}}</p>
                    </div>
                    </th>
                    </table>
                    
                    {{--Agregar Detalle carrito--}}
                </div>
                <a href="{{url('borrar') }}" class="btn btn-warning " role="button" aria-pressed="true">Borrar Productos</a>
                <div class="alert alert-warning alert-dismissable">
               

               



<form>

<h2>Complete su Orden</h2>
<p class="h6">Por favor llene este formulario con sus datos para poder procesar su orden y nuestro equipo pueda ponerse en contacto con usted para la entrega de los articulos</p>
  <div class="form-group">
      <label for="validation01">Nombres</label>
      <input type="text" class="form-control is-valid" id="validation01" 
             required>
  </div>
  <div class="form-group">
      <label for="validation01">Apellidos</label>
      <input type="text" class="form-control is-valid" id="validation01" 
             required>
  </div>
<div class="form-group">
      <label for="validation01">Dirrecion</label>
      <input type="text" class="form-control is-valid" id="validation01" 
              required>
  </div>
  <div class="form-group">
      <label for="validation01">Email</label>
      <input type="text" class="form-control is-valid" id="validation01" 
              required>
  </div>
  <div class="form-group">
      <label for="validation01">Telefono</label>
      <input type="text" class="form-control is-valid" id="validation01" 
              required>
  </div>
  <a href="{{url('pagar') }}" class="btn btn-success"  role="button" aria-pressed="true">Pagar</a>

</form>
      
           
                

                
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
