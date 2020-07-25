<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">
    <title>Crear curso</title>
</head>
<body class="container row">
    <div class=" center card col s8 push-s2">
        <div class=" card-content">
            <form action="<?php echo e(route('cursos.data')); ?>" method="post" id="data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="name">
                                <label>Nombre del curso</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="abbrevation" >
                                <label>Abreviación</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-action ">
            <div class="row">
                <button type="submit" form="data" class="btn green darken-3 col s3 left">Enviar</button>
                <a href="<?php echo e(route('cursos.index')); ?>" class="btn red darken-3 col s3 right">Cancelar</a>
            </div>
        </div>
    </div>
    <script src="<?php echo e(url('js/materialize.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\laravelMigration\resources\views/cursos/create.blade.php ENDPATH**/ ?>