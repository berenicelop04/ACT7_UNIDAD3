<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Detalles de Solicitud</h1>

        <br>
        <a href="{{Route('solicitud.create')}}" class="btn btn-primary">Nuevo</a><br>
        <table>
            <thead>
                <tr>
                    <th>Fecha de Solicitud</th>
            
                    <th>Servicio ID</th>
                    <th>Fecha de Servicio</th>
                    <th>Hora de Servicio</th>
                    <th>Ubicación de Servicio</th>
                    <th>Duración de Servicio</th>
                    <th>Acciones</th>
             
                </tr>
            </thead>

            <tbody>
                @php
                $cont = 1;

                @endphp
                @foreach($data as $solicitud)
                <tr>
                  
                    <th>{{$solicitud -> fecha_solicitud}}</th>
                   
                    <th>{{$solicitud ->servicio_id }}</th>
                    <th>{{$solicitud -> fecha_servicio}}</th>
                    <th>{{$solicitud -> hora_servicio}}</th>
                    <th>{{$solicitud -> ubicacion_servicio }}</th>
                    <th>{{$solicitud -> duracion_servicio }}</th>
                  
                    
                    <td>
        
        <a href="{{ route('solicitud.edit',['id'=>$solicitud->_id]) }}" class="btn btn-warning edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil"></i></a>
        <form action="{{ route('solicitud.destroy', ['solicitud' => $solicitud->_id]) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger delete" title="Delete" data-toggle="tooltip"><i class="bi bi-trash"></i></button>
</form>    </td>
                 
    

                   
                   
                </tr>
   @php
   $cont++;
   @endphp
   @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>
