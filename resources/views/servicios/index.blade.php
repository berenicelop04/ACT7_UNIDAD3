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
    <a href="{{ url()->previous() }}" class="btn btn-primary btn-regresar" style="position: absolute; top: 10px; left: 10px;">Regresar</a>

        <h1>Detalles de los Servicios</h1>
        <ul class="nav navbar-right panel_toolbox">
                        <a href="{{Route('servicios.create')}}" class="btn btn-primary">Nuevo</a>
        </ul>
        <table>
            <thead>
                <tr>
                    <th>Tipo de Servicio</th>
                    <th>Descripción del servicio</th>
                    <th>Precio del servicio</th>
                    <th>Duración del servicio</th>
                    <th>Acciones</th>
               

                </tr>
            </thead>

            <tbody>
                @php
                $cont = 1;

                @endphp
                @foreach($data as $servicios)
                <tr>
                  
                    <th>{{$servicios -> tipo_servicio}}</th>
                    <th>{{$servicios -> descripcion_servicio}}</th>
                    <th>{{$servicios -> precio_servicio }}</th>
                    <th>{{$servicios -> duracion_servicio}}</th>
          
                  
                    <td>
        
        <a href="{{ route('servicios.edit',['id'=>$servicios->_id]) }}" class="btn btn-warning edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil"></i></a>
        <form action="{{ route('servicios.destroy', ['servicio' => $servicios->_id]) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger delete" title="Delete" data-toggle="tooltip"><i class="bi bi-trash"></i></button>
</form>
    </td>
                    
                 
    

                   
                   
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
