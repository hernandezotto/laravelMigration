<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <title>Fichas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s10">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center-align">TABLA FICHAS</span>
                </div>
                <table class="striped blue-grey lighten-2 centered white-text">
                    <thead class="indigo">
                        <tr>
                            <th>INDICADOR</th>
                            <th>NOMBRE</th>
                            <th>FECHA DE CREACION</th>
                            <th>FECHA DE ACTUALIZACION</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $fichas)
                        <tr>
                            <td>{{$fichas->id}}</td>
                            <td>{{$fichas->name}}</td>
                            <td>{{$fichas->created_at}}</td>
                            <td>{{$fichas->updated_at}}</td>
                            <td>
                                <form action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('fichas.edit',$fichas->id) }}" class="btn btn-flating btn-small green darken-2">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <button type="submit" class="btn btn-floating btn-small red darken-3">
                                        <i class="material-icons">delete_forever</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-action">
                <a href="{{ route('fichas.create') }}" class="btn-small green darken-3">Crear ficha</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
