<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if( isset($_POST['m_prima']) && isset($_POST['min']) && isset($_POST['max']) && isset($_POST['precio']) && isset($_POST['unidad']) && isset($_POST['desc']))
{
    $m_prima=strtolower($_POST['m_prima']);
    $unidad=strtolower($_POST['unidad']);
    $min=$_POST['min'];
    $max=$_POST['max'];
    $precio=$_POST['precio'];
    $unidad=$_POST['unidad'];
    $desc=$_POST['desc'];

	include "php/pagina/pgsql.php";
	$enlace=conectarAd();
	$sql="SELECT nombre FROM productos.productobruto where nombre='$m_prima'";
  	$result=basedatos($sql);
	$col=pg_fetch_row($result);
        
	if($col==0)
  	{
         //valido formato de imagen y se guarda la imagen con el mismo valor del campo $nombre (nombre del producto)
        $img=$_FILES['fmp']['tmp_name'];
        $tipoimg=0;
        $tipo=getimagesize($img);
        if($tipo[2]==1) 
        {$ext=".gif"; $tipoimg=0;}
        elseif($tipo[2]==2) 
        {$ext=".jpg";$tipoimg=0;}
        else
        {$tipoimg==1;}
    if($tipoimg==1)
    {?>
      <script language='javascript'> 
      alert('Formato de imagen no valido !!!');
     self.location="inser_mp.php";
      </script>   
    <?php
    }
    else
    {
      $ruta="imagenes/".$m_prima.$ext;
      copy($img,$ruta);
      //Crear producto
      $query="INSERT INTO productos.productobruto VALUES (default, '$m_prima', '$min', '$max', '$precio', now(), '$unidad', 't', 'imagenes/$m_prima$ext', '$desc')";
      $resultado=basedatos($query);
    }
    cerrar($enlace);
    ?>
    <script language='javascript'> 
      alert('*** Registro Exitoso ***');
      self.location="modpbruto.php";
    </script>";
    <?php
    }
  else
  {?>
  <script language="javascript">
      alert("Producto ya existe");
      self.location="inser_mp.php";
  </script>
  <?php
  }
} 	
else
{
?>
<script type="text/javascript">
	alert("Favor llenar todos los campos");
         self.location="inser_mp.php";
</script>

<?php
}