@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                 <h1 class="display-1">VISIÒN</h1>
                <p>La visión de placer delivery, es la de convertirse en la app que pueda facilitar la vida de nuestros usuarios dentro del corregimiento del placer a la hora de hacer las compras o pedir comida. Nosotros como compañía tenemos el planteamiento de en un lapso, no superior a 5 años de poder expandir nuestra empresa a los diferentes corregimientos y municipios aledaños (Santa Elena, El cerrito, Palmira, etc.) Para de esta manera ser los numero 1 en el mercado de Delivery (domicilios) y por consiguiente generar empleos a personas que lo necesiten, de esta manera ayudaremos a nuestra comunidad en todos los aspectos.</p>
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
