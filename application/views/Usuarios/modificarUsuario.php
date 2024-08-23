<div class="col-lg-5">
    <?php echo base_url(); ?>
    <form method="post" action="<?php echo base_url('Usuarios/Usuarios/updateUser'); ?>">
        <div class="form-group col-lg-3">
            <label for="id">ID</label>
            <input type="number" name="id" readonly="true" class="form-control" value="<?php echo $usuario->id ?>">
        </div>
        <div class="clearfix"></div>
        <div class="form-group col-lg-8">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-group" required value="<?php echo $usuario->nombre ?>">
        </div>
        <div class="form-group col-lg-8">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-group" required value="<?php echo $usuario->apellido ?>">
        </div>
        <div class="form-group col-lg-8">
            <label for="correo">Email</label>
            <input type="text" name="correo" class="form-group" required value="<?php echo $usuario->correo ?>">
        </div>
        <div class="clearfix"></div>
        <input type="submit" class="btn btn-primary" value="Guardar"></input>
        <input type="reset" class="btn btn-danger" value="Limpiar"></input>
    </form>
</div>