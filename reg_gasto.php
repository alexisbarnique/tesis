<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if( isset($_POST['re']) && isset($_POST['me']))
{
    $re=$_POST['re'];
    $me=$_POST['me'];
	include "php/pagina/pgsql.php";
	$enlace=conectarAd();
	$sql="insert into diario.gastos values(default, '$re', '$me', now())";
  $result=basedatos($sql);
              ?>
            <script type="text/javascript">
                alert("Gasto registrado con exito");
                 self.location="egresos.php";
            </script>
<?php
cerrar($enlace);
}      	
else
{
?>
<script type="text/javascript">
	alert("Favor llenar todos los campos");
         self.location="egresos.php";
</script>
<?php
}

