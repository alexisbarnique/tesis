<?php
    include ('libreria.php');

    cab('Registrar Productos');
?>
    <h1 class="page-header">Registrar</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Materia prima
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form action="insermp.php" enctype="multipart/form-data" method="post">
             <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="m_prima" id="m_prima" type="text" autofocus required>
             </div>
             <div class="form-group">
                <label>Minimo</label>
                <input class="form-control" name="min" id="min" type="number" min="1" autofocus required>
             </div>
             <div class="form-group">
                <label>Maximo</label>
                <input class="form-control" name="max" id="max" type="number" min="1" required>
             </div>
             <div class="form-group">
                <label>Precio</label>
                <input class="form-control" name="precio" id="precio" type="number" min="1" required>
             </div>
            <div class="form-group">
                <label>Unidad</label>
                <select name="unidad" id="unidad" class="form-group" required>
                    <option value="" selected>Seleccionar</option>
                        <option value="gramos">Gramos</option>
                        <option value="kilogramos">Kilogramos</option>
                        <option value="sacos">Sacos</option>
                </select>
             </div>
              <div class="form-group">
                <label>Descripcion</label>
                <input class="form-control" name="desc" id="desc" type="text" required>
             </div>
            <div class="form-group">
                <label>Imagen</label>
                <input class="form-control" name="fmp" id="fmp" type="file" required>
             </div>
            <center><button name="sub" type="submit" class="btn btn-outline btn-success">Registrar</button>
            <button type="reset" class="btn btn-outline btn-warning">Borrar</button></center>
        </form>         
    <?php
    pie();
?>