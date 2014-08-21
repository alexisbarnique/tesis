<?php
    include ('libreria.php');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $sql="select id, razon from clientes.cliente";
    $result=basedatos($sql);
    cab('Reporte de clientes');
?>
<h1 class="page-header">Reporte</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pedidos de clientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
              <div class="form-group">
                <label>Cliente</label>
                <select name="rep_cli" class="form-group">
                    <option value="" selected>Seleccionar</option>
                      <?php
                      while($row=pg_fetch_row($result))
                      {?>
                      <option name="s_c" value="<?php echo $row['0'];?>"><?php echo $row['1'];?></option>
                      <?php 
                      }cerrar($enlace);
                      ?>
                </select>
             </div>
                        </div>
                </div>
    </div>         

<?php
  pie();
?>