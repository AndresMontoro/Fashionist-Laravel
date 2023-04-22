@extends('layouts.Principal')
@section('contenido')
<article>
            <h2 id="informacion" class="titulo"  style="background-color: #735945;">INFORMACIÓN DE PRECIOS </h2>

            <a>
                <h5 class="t-center">Esta peluquería de barrio ofrece una amplia gama de servicios a precios asequibles. 
                Desde cortes de pelo básicos hasta peinados más elaborados.</h5>
            </a>

            <hr class="featurette-divider">

            <br>
            <h5 class="t-center">AQUI PUEDES CONSULTAR LOS PRECIOS</h5>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Trabajo</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Corte</td>
                            <td>10€</td>
                        </tr>
                        <tr>
                            <td>Corte + barba</td>
                            <td>15€</td>
                        </tr>
                        <tr>
                            <td>Corte + barba + cejas</td>
                            <td>17€</td>
                        </tr>
                        <tr>
                            <td>Corte + barba + cejas + dibujo</td>
                            <td>19€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <button >
                    <a class="button" style="vertical-align:middle"  href="login_F.php"><span>Reserva</span></a>
                </button>
                   
            </div>
            
        </article>  
@endsection