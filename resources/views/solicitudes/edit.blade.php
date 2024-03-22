<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
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
        .container {
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #8a2be2; /* verde */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px; /* agregar margen derecho para separar los botones */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Servicio</h1>
        <form name="frmservicio" id="frmservicio2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('solicitud.update', $solicitud->_id) }}">
            @csrf
            @method('PUT')

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-container">
                        <h2 class="text-center mb-4">Formulario Solicitud</h2>
                        <div class="form-group">
                            <label for="fecha_solicitud">Fecha de la solicitud:</label>
                            <input type="text" name="fecha_solicitud" class="form-control" id="fecha_solicitud" value="{{ $solicitud->fecha_solicitud }}" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="servicio_id">Servicio ID:</label>
                            <input type="text" name="servicio_id" class="form-control" id="servicio_id" value="{{ $solicitud->servicio_id }}" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_servicio">Fecha del Servicio:</label>
                            <input type="text" name="fecha_servicio" class="form-control" id="fecha_servicio" value="{{ $solicitud->fecha_servicio }}" required>
                        </div>
                        <div class="form-group">
                            <label for="hora_servicio">Hora del Servicio:</label>
                            <input type="text" name="hora_servicio" class="form-control" id="hora_servicio" value="{{ $solicitud->hora_servicio }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ubicacion_servicio">Ubicación del Servicio:</label>
                            <input type="text" name="ubicacion_servicio" class="form-control" id="ubicacion_servicio" value="{{ $solicitud->ubicacion_servicio }}" required>
                        </div>
                        <div class="form-group">
                            <label for="duracion_servicio">Duración del Servicio:</label>
                            <input type="text" name="duracion_servicio" class="form-control" id="duracion_servicio" value="{{ $solicitud->duracion_servicio }}" required>
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
