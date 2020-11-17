@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Introducion') }}</div>
                

                

                <div class="card-body">

                 <p>El Proyecto consiste en plantear, organizar y direccionar una aplicación para luego ser una alternativa en el mercadeo virtual para promover una actividad, desde el momento que se concibe la idea, hasta el momento que los clientes comienzan a adquirir el producto o servicio en una base regular.
En otras palabras se busca realizar una plataforma que nos permita comprar de manera más sencilla y rápida desde la comodidad de nuestros hogares desde un mercado, hasta una compra express, un domicilio de tu restaurante favorito, un favor o muchas cosas más.
</p>
<p>PROYECTO.
HAKESE⚡FLASH.

Team: 
HAROLD ANDRES RUALES
KEVIN DAVID CAMPAZ
SEBASTIAN MOSQUERA

</p>

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
