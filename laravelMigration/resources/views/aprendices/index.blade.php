<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Aprendices</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s15">
                <div class="card">
                    <div class="card-content">
                        <div class="span card-title center-alaign">
                            TABLA APRENDICES
                            <table class="striped blue-grey lighten-2 centered white-text">
                                <thead class="indigo">
                                    <tr>
                                        <th>INDICADOR</th>
                                        <th>NOMBRES</th>
                                        <th>APELLIDOS</th>
                                        <th>EMAIL</th>
                                        <th>DOCUMENTO</th>
                                        <th>EDAD</th>
                                        <th>FECHA DE CREACION</th>
                                        <th>FECHA DE ACTUALIZACION</th>
                                        <th>ACCIONES</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rows as $aprendiz)

                                    <tr>
                                        <td>{{$aprendiz->id}}</td>
                                        <td>{{$aprendiz->names}}</td>
                                        <td>{{$aprendiz->lastnames}}</td>
                                        <td>{{$aprendiz->email}}</td>
                                        <td>{{$aprendiz->document}}</td>
                                        <td>{{$aprendiz->edad}}</td>
                                        <td>{{$aprendiz->created_at}}</td>
                                        <td>{{$aprendiz->updated_at}}</td>
                                        <td>
                                            <form action="{{ route('aprendices.delete', $aprendiz->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('aprendices.edit', $aprendiz->id) }}" class="btn btn-flating btn-small green darken-2">
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
                            <a href="{{ route('aprendices.create') }}" class="btn-small green darken-3">Crear aprendiz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
