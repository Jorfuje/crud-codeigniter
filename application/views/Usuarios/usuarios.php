<head>

    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class="col-lg-5">
    <form method="post" action="<?php echo base_url('Usuarios/Usuarios/saveUser'); ?>">
            <div class="form-group col-lg-8">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-group" required>
            </div>
            <div class="form-group col-lg-8">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-group" required>
            </div>
            <div class="form-group col-lg-8">
                <label for="correo">Email</label>
                <input type="text" name="correo" id="correo" class="form-group" required>
            </div>
            <div class="clearfix"></div>
            <input type="submit" class="btn btn-primary" value="Guardar"></input>
            <input type="reset" class="btn btn-danger" value="Limpiar"></input>
        </form>
    </div>
    <div class="col-lg-7">
        <table border="1" class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario->id; ?></td>
                        <td><?php echo $usuario->nombre; ?></td>
                        <td><?php echo $usuario->correo; ?></td>
                        <td><a href="Usuarios/modicarUsuario/<?= $usuario->id; ?>" class="btn btn-primary">Modificar</a></td>
                        <td><a href="Usuarios/eliminarUsuario/<?= $usuario->id; ?>" class="btn btn-primary">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>