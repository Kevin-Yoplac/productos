<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <style>
        .cafondo{
            background-color: black;
            width: 100%;
            height: 150px;
        }
        .caimagen{
            display: inline-block;
            width: 70%;
            margin-top: 20px;
            margin-left: 10px;
        }
        .direccion{
            color: white;
            display: inline-block;
            width: 28%;
        }
        .opcion{
            width: 100%;
            height: 30px;
            display: inline-block;
        }
        details{
            display: inline-block;
            margin-left: 180px;
            margin-top: 10px;
        }
        img{
            margin-left: 20px;
            margin-top: 15px;
        }
        footer{
            width: 100%;
            height: 30px;
            background-color: black;
            color: white;
        }
        h2{
            margin-left: 43%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="cafondo">
            <div class="caimagen">
                <img src="{{ asset('img/784911.jpg') }}" width="100">
            </div>
            <div class="direccion">
                <ul>
                    <li>Telefono: 938543502</li>
                    <li>Dirección: Jr. Amazonas 120</li>
                </ul>
            </div>
        </div>
        <div class="opcion">
            <details>
                <summary>Productos</summary>
                <p>
                    <a href="">Nuevo</a>
                </p>
                <p>
                    <a href="">Lista</a>
                </p>
            </details>
            <details>
                <summary>Clientes</summary>
                <p>
                    <a href="">Nuevo</a>
                </p>
                <p>
                    <a href="">Lista</a>
                </p>
            </details>
            <details>
                <summary>Envios</summary>
                <p>
                    <a href="">Nuevo</a>
                </p>
                <p>
                    <a href="">Lista</a>
                </p>
            </details>
        </div>
    </header>
    <main>
        @yield('cuerpo')
    </main>
    <footer>
        <h2>Pie de pagina</h2>
    </footer>
</body>
</html>