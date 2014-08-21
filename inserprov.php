<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if( isset($_POST['razon1']) && isset($_POST['rif1']) && isset($_POST['dirprov']) && isset($_POST['t1prov']) && isset($_POST['t2prov']) && isset($_POST['desprov']))
{
    $razon1=strtolower($_POST['razon1']);
    $rif1=$_POST['rif1'];
    $dirprov=$_POST['dirprov'];
    $t1prov=$_POST['t1prov'];
    $t2prov=$_POST['t2prov'];
    $desprov=$_POST['desprov'];

	include "php/pagina/pgsql.php";
	$enlace=conectarAd();
	$sql="SELECT id FROM proveedores.proveedor where rif='$rif1'";
  $result=basedatos($sql);
	$col=pg_fetch_row($result);
        
	if($col==0)
  	{
      //Registrar cliente
      $query="INSERT INTO proveedores.proveedor VALUES (default, '$razon1', '$rif1', '$desprov', 't', '$dirprov', '$t1prov', '$t2prov')";
      $resultado=basedatos($query);
    cerrar($enlace);
    ?>
    <script language='javascript'> 
      alert('*** Registro Exitoso ***');
      self.location="listaprov.php";
    </script>";
    <?php
    }
  else
  {?>
  <script language="javascript">
      alert("Proveedor ya existe");
      self.location="listaprov.php";
  </script>
  <?php
  }
} 	
else
{
?>
<script type="text/javascript">
	alert("Favor llenar todos los campos");
         self.location="listaprov.php";
</script>

<?php
}