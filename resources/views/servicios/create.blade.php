<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos del formulario */
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
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
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container" >
<form name="frmservicio" id="frmservicio2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('servicios.store')}}">
@csrf 
    <div class="row justify-content-center">
    <a href="{{ url()->previous() }}" class="btn btn-primary btn-regresar" style="position: absolute; top: 10px; left: 10px;">Regresar</a>

        <div class="col-md-6">
            <div class="form-container">
                
                <h2 class="text-center mb-4">Ingresar Servicios</h2>
                <form>
                    <div class="form-group">
                        <label for="tipo_servicio">Tipo de servicio:</label>
                        <input type="text" name="tipo_servicio" class="form-control" id="tipo_servicio" placeholder="tipo_servicio">
                    </div>
                    <div class="form-group">
                        <label for="descripcion_servicio">Descripción del servicio:</label>
                        <textarea class="form-control" name="descripcion_servicio" id="descripcion_servicio" rows="3" placeholder="descripción_servicio"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="precio_servicio">Precio del servicio:</label>
                        <textarea class="form-control" name="precio_servicio" id="precio_servicio" rows="3" placeholder="precio_servicio"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="duracion_servicio">Duración del servicio:</label>
                        <textarea class="form-control" name="duracion_servicio" id="duracion_servicio" rows="3" placeholder="duracion_servicio"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </form>
</div>

</body>
</html>
