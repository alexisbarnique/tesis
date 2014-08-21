<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if( isset($_POST['prod_f']) && isset($_POST['precio1']) && isset($_POST['des1']))
{
    $prod_f=strtolower($_POST['prod_f']);
    $precio1=$_POST['precio1'];
    $des1=$_POST['des1'];

	include "php/pagina/pgsql.php";
	$enlace=conectarAd();
	$sql="SELECT nombre FROM productos.productofinal where nombre='$prod_f'";
  	$result=basedatos($sql);
	$col=pg_fetch_row($result);
        
	if($col==0)
  	{
         //valido formato de imagen y se guarda la imagen con el mismo valor del campo $nombre (nombre del producto)
            $img=$_FILES['fpf']['tmp_name'];
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
     self.location="inser_pf.php";
      </script>   
    <?php
    }
    else
    {
      $ruta="imagenes/".$prod_f.$ext;
      copy($img,$ruta);
      //Crear producto
      $query="INSERT INTO productos.productofinal VALUES (default, '$prod_f', '$precio1', 't', 'imagenes/$prod_f$ext', '$des1')";
      $resultado=basedatos($query);
    }
    cerrar($enlace);
    ?>
    <script language='javascript'> 
      alert('*** Registro de producto terminado exitoso***');
      self.location="inser_pf.php";
    </script>";
    <?php
    }
  else
  {?>
  <script language="javascript">
      alert("Producto ya existe");
      self.location="modfinal.php";
  </script>
  <?php
  }
} 	
else
{
?>
<script type="text/javascript">
	alert("Favor llenar todos los campos");
         self.location="inser_pf.php";
</script>

<?php
}