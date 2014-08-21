<?php
/**
 * Archivo para activar categorias, subcategorias, productos, y productos compuestos
 * @copyright (c) 2014, Inversiones IconSolutions C.A
 * @package Productos
 * @param char $_POST['opc'] nombre del boton
 * @param int $_POST['idcate'] cantidad de productos comprados
 * @return string Retorna codido JavaScript especificando si la accion fue satifactoria o no
 * @author Alexis Barnique <agbarnique@iconsolutions.com.ve>
 * @version 1.0  10/07/2014
 */
//Abrir la conexion solo si existen los parametros
include "../Pag/pgsql.php";
$enlace=conectarAd(); 
$iu=$_POST['iu'];
	switch($_POST['opc'])
	{
		case 'actiuser':
		$sql="update personas set estado='t' where id='$iu'";
		$result=basedatos($sql);cerrar($enlace);
                ?>
                    <script language="javascript">
                    alert("****Registro activado con exito****");
                     self.location='index.php';
                    </script>
                <?php
		break;
	}
?>