<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <title>Cursos</title>
</head>
<body>
    <div class="row container">
        <col class="s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center-align">ESTE ES EL TITULO DE LA TABLA</span>
                    <table class="striped blue-grey lighten-2 centered white-text ">
                        <thead class="indigo">
                            <tr>
                                <th>INDICADOR</th>
                                <th>NOMBRE DEL CURSO</th>
                                <th>ABREVIACION</th>
                                <th>FECHA DE CREACION</th>
                                <th>FECHA DE ACTUALIZACION</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="black-text">
                            @foreach ($rows as $curso)

                            <tr>
                                <td>{{$curso->id}}</td>
                                <td>{{$curso->name}}</td>
                                <td>{{$curso->abbrevation}}</td>
                                <td>{{$curso->created_at}}</td>
                                <td>{{$curso->updated_at}}</td>
                                <td>
                                    <form action="{{ route('cursos.delete', $curso->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('cursos.edit',$curso->id) }}" class="bnt btn-floating btn-small green darken-2">
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
                    <a href="{{ route('cursos.create') }}" class="btn-small green darken-3">Crear curso</a>
                </div>
            </div>
    </div>

</body>
</html>
