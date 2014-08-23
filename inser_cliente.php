<?php
    include ('libreria.php');

    cab('Registrar clientes');
?>
    <h1 class="page-header">Registrar</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Clientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form id="reg_usu" action="insercliente.php" enctype="multipart/form-data" method="post">
             <div class="form-group">
                <label>Razon</label>
                <input class="form-control" name="razon" type="text" autofocus required>
             </div>
             <div class="form-group">
                <label>Rif</label>
                <input class="form-control" name="rif" type="text" placeholder="j123456789">
             </div>
             <div class="form-group">
                <label>Direccion</label>
                <input class="form-control" name="dircli" type="text" required>
             </div>
             <div class="form-group">
                <label>Telefono 1</label>
                <input class="form-control" name="t1cli" type="number" required>
             </div>
             <div class="form-group">
                <label>Telefono 2</label>
                <input class="form-control" name="t2cli" type="number" required>
             </div>
            <center><button name="sub" type="submit" class="btn btn-outline btn-success">Registrar</button>
            <button type="reset" class="btn btn-outline btn-warning">Borrar</button></center>
        </form>         
    <?php
    pie();
?>