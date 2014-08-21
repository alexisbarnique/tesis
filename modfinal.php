<?php
    include ('libreria.php');
    cab('Lista de productos');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $query="select * from productos.productofinal";
    $con=basedatos($query);
?>
    <h1 class="page-header">Listado</h1>
     <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Productos terminados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="modfinal">
                                    <thead>
                                        <tr>
                                            <th><center>Nombre</center></th>
                                            <th><center>Precio</center></th>
                                            <th><center>Imagen</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <?php 
                                    while ($invfinal=pg_fetch_row($con))
                                    { 
                                    ?>
                                            <tr class="odd gradeX">
                                                    <td><center><?php echo $invfinal[1];?></center></td>
                                                    <td><center><?php echo $invfinal[2];?></center></td>
                                                    <td><center><img src="<?php echo $invfinal[4];?>" /></center></td>
                                            </tr>
                                    <?php  
                                    } cerrar($enlace);
                                    ?>
                                </table>
<?php
    pie();
?>