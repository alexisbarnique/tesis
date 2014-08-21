<?php
include "php/pagina/pgsql.php";
$enlace=conectarAd();
$t11=$_POST['t11'];
$t21=$_POST['t21'];
$direccion1=$_POST['direccion1'];
$email1=$_POST['email1'];
if(isset($_POST['clave1']) && isset($_POST['reclave1']) && isset($_POST['t11']) && isset($_POST['t21']) && isset($_POST['direccion1']) && isset($_POST['email1'])) 
{
	$aclave=md5($_POST['clave1']);
	$rclave=$_POST['reclave1'];
	$sql="update personas set telefono1='$t11', telefono2='$t21', clave='$aclave', correo='$email1', direccion='$direccion1'";
	$result=basedatos($sql);
	?>
       <script language="javascript">
            alert("****Usuario actualizado con exito 1****");
            self.location='index.php';
       </script>
    <?php
}
else if(isset($_POST['t11']) && isset($_POST['t21']) && isset($_POST['direccion1']) && isset($_POST['email1']))
{
	$sql1="update personas set telefono1='$t11', telefono2='$t21', correo='$email1', direccion='$direccion1'";
	$result1=basedatos($sql1);
	?>
       <script language="javascript">
            alert("****Usuario actualizado con exito****");
            self.location='index.php';
       </script>
    <?php
}
else
{
	?>
       <script language="javascript">
            alert("****Error en la captura de datos****");
            self.location='moduser.php';
       </script>
    <?php
}
?>