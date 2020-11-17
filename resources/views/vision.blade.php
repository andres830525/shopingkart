@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                
                <div class="card-body">
                 <h1 class="display-1">VISIÒN</h1>
                <p>Nuestra misión en hakeseflash es conectar a nuestros usuarios con más de 50 mil productos y servicios de manera rápida y eficiente gracias a la tecnología.</p>
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
