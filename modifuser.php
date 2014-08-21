<?php
$iduser=$_POST['iduser'];
if(isset($_POST['iduser'])) 
{
//abro conexion solo si los datos existen
include "php/pagina/pgsql.php";
$enlace=conectarAd();
$sql="select p.nombre, p.apellido, p.cedula, p.direccion, p.correo, p.telefono1, p.telefono2, p.estado, u.nombre, n.nombre from personas as p, usuarios as u, niveles as n where u.id_persona=p.id and u.nivel=n.id and p.cedula='$iduser'";
$result=basedatos($sql);
$row=pg_fetch_row($result);
?>
    <h1 class="page-header">Modificar</h1>
    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form id="mod_usu">
             <div class="form-group">
                <label>Usuario</label>
                <input class="form-control" name="usuario1" type="text" value="<?php echo $row[8];?>" autofocus disabled/>
                <input type="hidden" value="$iduser" id="iu1" />
             </div>
             <div class="form-group">
                <label>Clave</label>
                <input class="form-control" name="clave1" type="text"/>
             </div>
             <div class="form-group">
                <label>Repita la clave</label>
                <input class="form-control" name="reclave1" type="text"/>
             </div>
             <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="nombre1" type="text" value="<?php echo $row[0];?>" disabled/>
             </div>
             <div class="form-group">
                <label>Apellido</label>
                <input class="form-control" name="apellido1" type="text" value="<?php echo $row[1];?>" disabled/>
             </div>
             <div class="form-group">
                <label>Cedula</label>
                <input class="form-control" name="cedula1" type="number" value="<?php echo $row[2];?>" disabled/>
             </div>
             <div class="form-group">
                <label>Telefono 1</label>
                <input class="form-control" name="t11" type="number" value="<?php echo $row[5];?>" />
             </div>
             <div class="form-group">
                <label>Telefono 2</label>
                <input class="form-control" name="t21" type="number" value="<?php echo $row[6];?>" />
             </div>
             <div class="form-group">
                <label>Direccion</label>
                <input class="form-control" name="direccion1" value="<?php echo $row[3];?>" maxlength="200"/>
             </div>
             <div class="form-group">
                <label>Correo</label>
                <input class="form-control" name="email1" value="<?php echo $row[4];?>" type="email"/>
             </div>
             <div class="form-group">
                <label>Tipo de usuario</label>
                <select name="nivel1" class="form-group" disabled>
                    <option value="<?php echo $row[9];?>" selected><?php echo $row[9];?></option>
                        <option value="3">Usuario</option>
                        <option value="2">Encargado</option>
                        <option value="1">Administrador</option>
                </select>
             </div>
            <?php
                    //muestra los botones correspondientes segun el estado
                    if($row[7]=='t')
                    {?>
                        <center><button class="btn btn-outline btn-warning" name="elimuser" id="elimuser" type="submit">Eliminar</button>
                    <?php
                    }
                    else
                    {
                    ?>
                        <center><button class="btn btn-outline btn-success" name="actiuser" id="actiuser" type="submit">Activar</button>

                    <?php
                    }
                    ?>
                        <button class="btn btn-outline btn-primary" name="actuser" id="actuser" type="submit">Actualizar</button></center>    
                </form>
                </div>
            </div>
        </div>
    </div>          
    <?php
     cerrar($enlace);
}
else
{    ?>
    <script language='javascript'> 
      alert('*** Error en la captura de usuario***');
      self.location="moduser.php";
    </script>";
    <?php
    }
?>