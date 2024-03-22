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
</head>
<body class="bg-gray-100 font-sans antialiased">
    <a href="{{ url()->previous() }}" class="btn btn-primary btn-regresar" style="position: absolute; top: 10px; left: 10px;">Regresar</a>
    <div class="min-vh-100 d-flex justify-content-center align-items-center py-4">
        <div class="container" style="background-color: #d3adf7; padding: 20px;">
            <div class="text-center mb-4">
                <h2 class="h3 font-weight-bold">¡¡Bienvenidos!!</h2>
            </div>

            <div class="text-center mb-4">
                <h2 class="h3 font-weight-bold">La agencia de niñeras más importante.</h2>
            </div>

            <div class="text-center mb-4">
                <h2 class="h3 font-weight-bold">Contamos con los mejores servicios y niñeras capacitadas para todo tipo de servicios.</h2>
            </div>
            <br>
            <!-- Botón para servicios -->
            <div class="mb-3">
                <a href="{{ url('/vistaprincipal') }}" class="btn btn-primary btn-block">Ingresar</a>
            </div>
        </div>
    </div>
</body>
</html>
