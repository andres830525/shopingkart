@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('') }}</div>
                <h1 class="display-1">MISIÒN</h1>



                <div class="card-body">

                 <p>La misión de placer delivery es ser los numero 1 en el ámbito de ventas por internet y domicilios, esta empresa surge de la necesidad de las personas del corregimiento por tener un servicio de domicilio rápido y efectivo que satisfaga sus necesidades en cuanto a comprar se trata. Además de esto esta aplicación surge también como alternativa para las diferentes tiendas del corregimiento como mecanismo para evitar aglomeraciones, es decir, las personas podrán pedir sus productos sin necesidad de salir de sus casas, de esta manera se podría evitar la propagación del virus COVID-19 que al día de hoy sigue siendo un gran peligro latente.</p>
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
