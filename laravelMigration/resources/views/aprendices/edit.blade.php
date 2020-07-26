<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Crear aprendiz</title>
</head>
<body class="container row">
    <div class=" center card col s8 push-s2">
        <div class=" card-content">
            <form action="{{ route('aprendices.update') }}" method="post" id="data">
                @csrf
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="names" value="{{$rows->names}}">
                                <label>Nombres del aprendiz</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="lastnames" value="{{$rows->lastname}}">
                                <label>Apellidos del aprendiz</label>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="formation_programs_id" id="formation_programs_id">
                                        <option>SELECCIONAR PROGRAMA DE FORMACION...</option>
                                        @foreach ($formation as $fpID)
                                         <option value="{{$fpID->id}}">{{$fpID->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="groups_id" id="groups_id">
                                        <option>SELECCIONAR FICHA...</option>
                                        @foreach ($group as $gID)
                                         <option value="{{$gID->id}}">{{$gID->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="email" name="email" value="{{$rows->email}}">
                                <label>Correo electronico SENA</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="document" value="{{$rows->document}}">
                                <label>Documento de identidad</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="document_type_id" id="document_type_id">
                                    <option>SELECCIONAR TIPO DE DOCUMENTO...</option>
                                    @foreach ($document as $dtID)
                                     <option value="{{$dtID->id}}">{{$dtID->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="date" name="edad" value="{{$rows->edad}}">
                                <label>Edad del aprendiz</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="genders_id" id="genders_id">
                                    <option>SELECCIONAR TIPO DE GENERO...</option>
                                    @foreach ($genders as $genID)
                                     <option value="{{$genID->id}}">{{$genID->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-action ">
            <div class="row">
                <button type="submit" form="data" class="btn green darken-3 col s3 left">Enviar</button>
                <a href="{{ route('aprendices.index') }}" class="btn red darken-3 col s3 right">Cancelar</a>
            </div>
        </div>
    </div>
    <script src="{{ url('js/materialize.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>
