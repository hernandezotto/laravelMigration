<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">
    <title>Editar curso</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo e(route('cursos.update', $rows->id)); ?>" method="post" id="data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col s9">
                    <div class="row">
                        <div class="input-field col">
                            <input type="text" name="name" value="<?php echo e($rows->name); ?>">
                            <label>Nombre del curso</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col">
                            <input type="text" name="abbrevation" value="<?php echo e($rows->abbrevation); ?>">
                            <label>Abreviación</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <button type="submit" form="data" class="btn-small green darken-3">Enviar</button>
        <a href="<?php echo e(route('cursos.index')); ?>" class="btn-small red darken-3">Cancelar</a>
    </div>
    <script src="<?php echo e(url('js/materialize.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\laravelMigration\resources\views/cursos/edit.blade.php ENDPATH**/ ?>