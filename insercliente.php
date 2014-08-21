<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if( isset($_POST['razon']) && isset($_POST['rif']) && isset($_POST['dircli']) && isset($_POST['t1cli']) && isset($_POST['t2cli']))
{
    $razon=strtolower($_POST['razon']);
    $rif=$_POST['rif'];
    $dircli=$_POST['dircli'];
    $t1cli=$_POST['t1cli'];
    $t2cli=$_POST['t2cli'];

	include "php/pagina/pgsql.php";
	$enlace=conectarAd();
	$sql="SELECT id FROM clientes.cliente where rif='$rif'";
  $result=basedatos($sql);
	$col=pg_fetch_row($result);
        
	if($col==0)
  	{
      //Registrar cliente
      $query="INSERT INTO clientes.cliente VALUES (default, '$razon', '$rif', '$dircli', '$t1cli', '$t2cli', 't')";
      $resultado=basedatos($query);
    cerrar($enlace);
    ?>
    <script language='javascript'> 
      alert('*** Registro Exitoso ***');
      self.location="listacli.php";
    </script>";
    <?php
    }
  else
  {?>
  <script language="javascript">
      alert("Cliente ya existe");
      self.location="inser_cliente.php";
  </script>
  <?php
  }
} 	
else
{
?>
<script type="text/javascript">
	alert("Favor llenar todos los campos");
         self.location="inser_cliente.php";
</script>

<?php
}