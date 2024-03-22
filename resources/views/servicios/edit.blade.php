<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            background-color: #ffd1dc; /* rosa pastel */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
            color: #333;
        }
        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #8a2be2; /* morado */
            border-color: #8a2be2; /* morado */
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            color: white;
            display: inline-block;
        }
        .btn-primary:hover {
            background-color: #6a1ea9; /* morado más oscuro */
            border-color: #6a1ea9; /* morado más oscuro */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Servicio</h1>
        <form name="frmservicio" id="frmservicio2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('servicios.update', $servicios->_id) }}">
            @csrf
            @method('PUT')

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-container">
                        <h2 class="text-center mb-4">Formulario Servicio</h2>
                        <div class="form-group">
                            <label for="tipo_servicio">Tipo de Servicio:</label>
                            <input type="text" name="tipo_servicio" class="form-control" id="tipo_servicio" value="{{ $servicios->tipo_servicio }}" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion_servicio">Descripción del Servicio:</label>
                            <textarea class="form-control" name="descripcion_servicio" id="descripcion_servicio" rows="3" required>{{ $servicios->descripcion_servicio }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio_servicio">Precio del Servicio:</label>
                            <input type="text" name="precio_servicio" class="form-control" id="precio_servicio" value="{{ $servicios->precio_servicio }}" required>
                        </div>
                        <div class="form-group">
                            <label for="duracion_servicio">Duración del Servicio:</label>
                            <input type="text" name="duracion_servicio" class="form-control" id="duracion_servicio" value="{{ $servicios->duracion_servicio }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
