<?php
$clien=$_POST['bc'];
$idproducto=$_POST['id'];
$cantidad=$_POST['can'];
$devol=$_POST['d'];
$subt=$_POST['sub'];
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $sql="SELECT id from clientes.cliente where razon='$clien'";
    $result=basedatos($sql);
    $col=pg_fetch_row($result);

    if($col!=0)
    {
    $idc=$col[0];
    $sql1="INSERT INTO clientes.pedidos VALUES(default, '$idc', '$idproducto', '$cantidad', 't', '$subt', '$devol')";
    $result1=basedatos($sql1);
    ?>
      <script type="text/javascript">
        alert("Pedido creado con exito");
        self.location='index.php';
      </script>
     <?php
    }
    else
    {
     ?>
      <script type="text/javascript">
        alert("Error al crear factura (cliente no existe)");
        self.location='venta.php';
      </script>
     <?php
    }?>