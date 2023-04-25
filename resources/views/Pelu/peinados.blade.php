@extends('layouts.Principal')
@section('contenido')

<style>
 .t-center{
            text-align:center;
  }
</style>
        
        

<article>
            <h2  class="t-center" id="fotos" class="titulo" style="background-color: #735945;">PEINADOS DEL MES</h2>
            <a>
                <h5 class="t-center">Aqui teneis el Top 3 Pelados del mes de Marzo</h5>
            </a>

            <hr class="featurette-divider">

            <div class="d-flex justify-content-center align-items-center">
                <div class="card-deck">
                    
                        <div class="card h-90  border-dark mb-1 " style="max-width: 16.9rem;" >
                            <img src="img/peinado_1.png" class="card-img-top" alt="pei1">
                            <div class="card-body">
                                <h5 class="card-title">Degradado Moderno con Tupe</h5>
                                <p class="card-text">Peinado muy moderno para ir a la última.</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('citas')}}" class="btn btn-dark">RESERVA YA</a>
                            </div>
                        </div>
                        </div>  
                   
                    
                        <div class="card h-90 border-dark mb-1 " style="max-width: 18rem;" style="max-heigth: 18rem;" >
                            <img src="img/quevedo.jpeg" class="card-img-top" alt="que">
                            <div class="card-body">
                                <h5 class="card-title">Mini Mullet</h5>
                                <p class="card-text">Quien no se quiere pelar como Quevedo.</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('citas')}}" class="btn btn-dark" style="color">RESERVA YA</a>
                            </div>
                        </div>

                   
                    
                        <div class="card h-90 border-dark mb-1" style="max-width: 18rem;" >
                            <img src="img/peinado_2.png" class="card-img-top" alt="pei2">
                            <div class="card-body">
                                <h5 class="card-title">Gran Tupe</h5>
                                <p class="card-text">No saldras igual en las fotos, pero seguro que te queda bien.</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('citas')}}" class="btn btn-dark">RESERVA YA</a>
                            </div>
                        </div>
             </div>
            </div>

                 
        </article>
@endsection