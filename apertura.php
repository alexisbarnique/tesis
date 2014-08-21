<?php
	include ('libreria.php');
	cab('Apertura');
  include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $query="select id, nombre from productos.productofinal where estado='t'";
    $result=basedatos($query);
?>
	<h1 class="page-header">Inicio del dia</h1>
	<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Apertura
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
              <div class="form-group">
              <form action="reg_gasto.php" enctype="multipart/form-data" method="post">
              	<div class="form-group">
                	<label>Cantidad de materia prima en cavas</label>
                	<input class="form-control" name="mp_c" id="mp_c" type="number" autofocus required/>
                </div>
                <div class="form-group">
                <label>Unidad</label>
                <select name="unidad" id="uinv" class="form-group" required>
                    <option value="" selected>Seleccionar</option>
                        <option value="gramos">Gramos</option>
                        <option value="kilogramos">Kilogramos</option>
                        <option value="sacos">Sacos</option>
                </select>
             </div>
                <div class="form-group">
                	<label>Cantidad de producto final en cavas</label>
                <select name="rep_cli" class="form-group">
                    <option value="" selected>Seleccionar</option>
                      <?php
                      while($row=pg_fetch_row($result))
                      {?>
                      <option name="s_pfc" value="<?php echo $row['0'];?>"><?php echo $row['1'];?></option>
                      <?php 
                      }cerrar($enlace);
                      ?>
                </select>
                	<input class="form-control" name="pf_c" id="pf_c" type="number"required/>
                </div>
                 <center><button name="sub" type="submit" class="btn btn-default">Registrar</button>
           		 <button type="reset" class="btn btn-default">Borrar</button></center>
              </form>
             </div>
                        </div>
                </div>
    </div>    
<?php
	pie();
?>
