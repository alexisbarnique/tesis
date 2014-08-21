<?php
    include ('libreria.php');
    cab('Registrar clientes');
?>
    <h1 class="page-header">Registrar</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Proveedor
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form action="inserprov.php" enctype="multipart/form-data" method="post">
             <div class="form-group">
                <label>Razon</label>
                <input class="form-control" name="razon1" type="text" autofocus required>
             </div>
             <div class="form-group">
                <label>Rif</label>
                <input class="form-control" name="rif1" type="text" required>
             </div>
             <div class="form-group">
                <label>Direccion</label>
                <input class="form-control" name="dirprov" type="text" required>
             </div>
             <div class="form-group">
                <label>Telefono 1</label>
                <input class="form-control" name="t1prov" type="number" required>
             </div>
             <div class="form-group">
                <label>Telefono 2</label>
                <input class="form-control" name="t2prov" type="number" required>
             </div>
            <div class="form-group">
                <label>Descripcion</label>
                <input class="form-control" name="desprov" type="text" required>
             </div>
            <center><button name="sub" type="submit" class="btn btn-outline btn-success">Registrar</button>
            <button type="reset" class="btn btn-outline btn-warning">Borrar</button></center>
        </form>         
    <?php
    pie();
?>