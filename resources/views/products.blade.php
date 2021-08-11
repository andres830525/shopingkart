@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/img7.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/img8.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/img9.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

            <div class="card">
                <div class="card-header"><h1>Listado de Productos Disponibles</h1></div>
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
