<?php
/**
 */
include "php/pagina/pgsql.php";
$enlace=conectarAd(); 
$iu=$_POST['iu'];
	switch($_POST['opc'])
	{
		case 'elimuser':
		$sql="update personas set estado='f' where id='$iu'";
		$result=basedatos($sql);cerrar($enlace);
                ?>
                    <script language="javascript">
                    alert("****Registro desactivado con exito****");
                     self.location='index.php';
                    </script>
                <?php
		break;
	}