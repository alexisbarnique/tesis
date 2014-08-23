<?php
/**
 */
include "php/pagina/pgsql.php";
$enlace=conectarAd(); 
	switch($_POST['opc'])
	{
		case 'elimuser':
		$iu=$_POST['iu'];
		$sql="update personas set estado='f' where id='$iu'";
		$result=basedatos($sql);cerrar($enlace);
                ?>
                    <script language="javascript">
                    alert("****Usuario desactivado con exito****");
                     self.location='index.php';
                    </script>
                <?php
		break;
		case 'elimcli':
		$icli=$_POST['id_cli'];
		$sql="update clientes.cliente set estado='f' where id='$icli'";
		$result=basedatos($sql);cerrar($enlace);
                ?>
                    <script language="javascript">
                    alert("****Cliente desactivado con exito****");
                     self.location='index.php';
                    </script>
                <?php
		break;
	}?>