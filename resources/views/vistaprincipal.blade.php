<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffd1dc; /* rosa pastel */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background-color: #ccc; /* gris */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .btn-enter {
            background-color: #4CAF50; /* verde */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-regresar {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <a href="{{ url()->previous() }}" class="btn btn-primary btn-regresar">Regresar</a>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <h2>Solicitud</h2>
                    <a href="/solicitudes" class="btn-enter">Entrar</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h2>Servicios</h2>
                    <a href="{{Route('servicios.index')}}" class="btn-enter">Entrar</a>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
