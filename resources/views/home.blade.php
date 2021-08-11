@extends('layouts.app')

@section('content')






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
      <img class="d-block w-100" src="./img/img4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/img5.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/img6.jpg" alt="Third slide">
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
                <div class="card-header" ><h1>Selecione en Nuestros productos que tipo de producto desea pedir</h1></div>
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

<!-- Initialize Swiper -->
  <script>
    $('.carouselExampleIndicators').carousel({
  interval: 2000
})
  </script>

@endsection
