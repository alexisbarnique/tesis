<?php
$idclien=$_POST['idclien'];
if(isset($_POST['idclien'])) 
{
//abro conexion solo si los datos existen
include "php/pagina/pgsql.php";
$enlace=conectarAd();
$sql="select rif, razon, direccion, telefono1, telefono2, estado from clientes.cliente where rif='$idclien'";
$result=basedatos($sql);
$row=pg_fetch_row($result);
?>
    <h1 class="page-header">Modificar</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Clientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form id="mod_cli" action="modif_cli.php" enctype="multipart/form-data" method="post">
             <div class="form-group">
                <label>Razón</label>
                <input class="form-control" name="mrazon" type="text" value="<?php echo $row[1];?>" autofocus disabled/>
             </div>
             <div class="form-group">
                <label>Rif</label>
                <input class="form-control" name="mrif" type="text" value="<?php echo $row[0];?>" disabled/>
             </div>
             <div class="form-group">
                <label>Dirección</label>
                <input class="form-control" name="mdir" type="text" value="<?php echo $row[2];?>" />
             </div>
             <div class="form-group">
                <label>Telefono 1</label>
                <input class="form-control" name="mt1" type="number" value="<?php echo $row[3];?>" />
             </div>
             <div class="form-group">
                <label>Telefono 2</label>
                <input class="form-control" name="mt2" type="number" value="<?php echo $row[4];?>" />
             </div>
            <?php
                    //muestra los botones correspondientes segun el estado
                    if($row[5]=='t')
                    {?>
                        <center><button class="btn btn-outline btn-warning" name="elimcli" type="submit">Eliminar</button>
                    <?php
                    }
                    else
                    {
                    ?>
                        <center><button class="btn btn-outline btn-success" name="acticli" type="submit">Activar</button>

                    <?php
                    }
                    ?>
                        <button class="btn btn-outline btn-primary" name="actucli" type="submit">Actualizar</button></center>
        </form>          
    <?php
}
?>