@extends('layouts.Principal')
@section('contenido')


<article>
    <style>
        body{
                background-color: rgb(219,213,185);
        }
        
        button{
            display: inline-block ;
            border-radius: 4px;
            background-color: #000000;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 15px;
            padding: 10px;
            width: 100px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            margin-right: 40rem;
            margin-left: 40rem
        }
        
        button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            color: #FFFFFF;
        }
          
        button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
          
        button:hover span {
            padding-right: 20px;
        }
          
        button:hover span:after {
            opacity: 1;
            right: 0;
        }
        
        .t-center{
            text-align:center;
        }
        
        
    </style>
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