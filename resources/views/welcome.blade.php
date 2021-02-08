<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mesa de ayuda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <style>
            .btn {
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container mx-auto mt-3 pt-3">
            <div class="row mx-auto">
                <div class="col-sm-10">
                    <img  class="img-fluid" src="{{asset('img/fondo2_inicio.jpg')}}" alt="Fondo inicial">
                </div>
                <div class="col-sm-2 mx-auto">
                    <img  class="img-fluid" src="{{asset('img/logo_mesadeayuda.jpg')}}" alt="Fondo inicial">
                    @if (Route::has('login'))

                            <a href="{{ route('login') }}" class="btn btn-md mb-2">INICIAR SESION</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-md btn-primary">REGISTRARSE</a>
                            @endif

                    @endif
                </div>
            </div>
        </div>
        
    </body>
</html>
