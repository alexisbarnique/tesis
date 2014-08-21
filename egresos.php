<?php
	include ('libreria.php');
	cab('Egresos');
?>
	<h1 class="page-header">Egresos del dia</h1>
	<div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Registrar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
              <div class="form-group">
              <form action="reg_gasto.php" enctype="multipart/form-data" method="post">
              	<div class="form-group">
                	<label>Razon</label>
                	<input class="form-control" name="re" id="re" type="text" autofocus required/>
                </div>
                <div class="form-group">
                	<label>Monto</label>
                	<input class="form-control" name="me" id="me" type="number"required/>
                </div>
                 <center><button name="sub" type="submit" class="btn btn-outline btn-success">Registrar</button>
           		 <button type="reset" class="btn btn-outline btn-warning">Borrar</button></center>
              </form>
             </div>
                        </div>
                </div>
    </div>    
<?php
	pie();
?>
