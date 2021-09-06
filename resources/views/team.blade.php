@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Introducion') }}</div>




                <div class="card-body">

                 <p>Los valores de nuestra compañía Placer Delivery son:
•	Ser ambicioso por el bien común
•	Respeto
•	Tomar acciones orientadas a tener resultados positivos
•	Crecimiento personal y corporativo
•	Deseo de superación
•	Ayuda a la comunidad
•	Puntualidad de entregas
•	Adaptabilidad
•	Transparencia

</p>
<p>PROYECTO.
Placer Delivery .

Team:


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
