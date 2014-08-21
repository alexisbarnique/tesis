<?php
    include ('libreria.php');

    cab('Registrar Productos');
?>
    <h1 class="page-header">Registrar</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Producto final
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form action="inserpf.php" enctype="multipart/form-data" method="post">
             <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="prod_f" type="text" autofocus required>
             </div>
             <div class="form-group">
                <label>Precio</label>
                <input class="form-control" name="precio1" type="number" required>
             </div>
             <div class="form-group">
                <label>Descripcion</label>
                <input class="form-control" name="des1" type="text" required>
             </div>
             <div class="form-group">
                <label>Imagen</label>
                <input class="form-control" name="fpf" id="fpmf" type="file" required>
             </div>
            <center><button name="sub" type="submit" class="btn btn-outline btn-success">Registrar</button>
            <button type="reset" class="btn btn-outline btn-warning">Borrar</button></center>
        </form>         
    <?php
    pie();
?>