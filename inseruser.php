<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if( isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula']) && isset($_POST['t1']) && isset($_POST['t2'])
&& isset($_POST['direccion']) && isset($_POST['email'])  && isset($_POST['clave']) && isset($_POST['reclave']) && isset($_POST['nivel']))
{
    $usu=strtolower($_POST['usuario']);
    $nomb=strtolower($_POST['nombre']);
    $ape=$_POST['apellido'];
    $cedu=$_POST['cedula'];
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $dir=$_POST['direccion'];
    $co=$_POST['email'];
    $cla=md5($_POST['clave']);
    $ni=$_POST['nivel'];
    $est='t';
	include "php/pagina/pgsql.php";
	$enlace=conectarAd();
	$sql="SELECT u.id, p.id FROM usuarios as u, personas as p where u.nombre='$usu' and p.cedula='$cedu'";
  	$result=basedatos($sql);
	$col=pg_fetch_row($result);
        
	if($col==0)
  	{
//inserto un usuario nuevo en la base de datos
            $query1="INSERT INTO personas VALUES (default, '$nomb', '$ape', '$cedu', '$dir', '$co', '$est', '$t1', '$t2')";
            $resultado1=basedatos($query1);
            
        $sql1="SELECT id FROM personas where cedula='$cedu'";
  	$result1=basedatos($sql1);
	$col1=pg_fetch_row($result1);
           if($col1!=0)
           {
            $idper=$col1[0];
            $query="INSERT INTO usuarios VALUES (default, '$usu', '$ni', 't', '$idper', '$cla')";
            $resultado=basedatos($query);
             ?>
                    <script language="javascript">
                    alert("****Registro exitoso****");
                    self.location="moduser.php";
                    </script>
             <?php
           }
           else
           {
            ?>
                    <script language="javascript">
                    alert("****Cedula de persona no encontrada****");
                    self.location="index.php";
                    </script>
             <?php
           }
                
        }
  	else
  	{
            ?>
            <script type="text/javascript">
                alert("El usuario o cedula ya existe");
                 self.location="index.php";
            </script>
            <?php
    	}cerrar($enlace);
} 	
else
{
?>
<script type="text/javascript">
	alert("Favor llenar todos los campos");
         self.location="index.php";
</script>

<?php
}

