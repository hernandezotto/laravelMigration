<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Editar fichas</title>
</head>
<body class="container row">
    <div class=" center card col s8 push-s2">
        <div class=" card-content">
            <form action="" method="post" id="data" >
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="name" value="{{$row->name}}">
                                <label>Nombre del ficha</label>
                            </div>
                            <div class="row">
                                <input-field class="col s12">
                                    <select name="formation_programs_id" id="formation_programs_id">
                                        @foreach ($formation as $fpID)
                                         <option value="{{$fpID->id}}">{{$fpID->name}}</option>
                                        @endforeach
                                    </select>
                                </input-field>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-action ">
            <div class="row">
                <button type="submit" form="data" class="btn green darken-3 col s3 left">Enviar</button>
                <a href="{{ route('fichas.index') }}" class="btn red darken-3 col s3 right">Cancelar</a>
            </div>
        </div>
    </div>
    <script src="{{ url('js/materialize.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>
