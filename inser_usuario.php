<?php
    include ('libreria.php');

    cab('Registrar usuarios');
?>
    <h1 class="page-header">Registrar</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form id="reg_usu" action="inseruser.php" enctype="multipart/form-data" method="post">
             <div class="form-group">
                <label>Usuario</label>
                <input class="form-control" name="usuario" type="text" autofocus required>
             </div>
             <div class="form-group">
                <label>Clave</label>
                <input class="form-control" name="clave" type="text" autofocus required>
             </div>
             <div class="form-group">
                <label>Repita la clave</label>
                <input class="form-control" name="reclave" type="text" autofocus required>
             </div>
             <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="nombre" type="text" required disabled>
             </div>
             <div class="form-group">
                <label>Apellido</label>
                <input class="form-control" name="apellido" type="text" required disabled>
             </div>
             <div class="form-group">
                <label>Cedula</label>
                <input class="form-control" name="cedula" type="number" required disabled>
             </div>
             <div class="form-group">
                <label>Telefono 1</label>
                <input class="form-control" name="t1" type="number" required disabled>
             </div>
             <div class="form-group">
                <label>Telefono 2</label>
                <input class="form-control" name="t2" type="number" required disabled>
             </div>
             <div class="form-group">
                <label>Direccion</label>
                <textarea class="form-control" name="direccion" maxlength="200" required disabled></textarea>
             </div>
             <div class="form-group">
                <label>Correo</label>
                <input class="form-control" name="email" type="email" required disabled>
             </div>
             <div class="form-group">
                <label>Tipo de usuario</label>
                <select name="nivel" class="form-group" required disabled>
                    <option value="" selected>Seleccionar</option>
                        <option value="3">Usuario</option>
                        <option value="2">Encargado</option>
                        <option value="1">Administrador</option>
                </select>
             </div>
            <center><button name="sub" type="submit" class="btn btn-outline btn-success" disabled>Registrar</button>
            <button type="reset" class="btn btn-outline btn-warning">Borrar</button></center>
        </form>         
    <?php
    pie();
?>