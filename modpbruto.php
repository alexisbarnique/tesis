<?php
    include ('libreria.php');
    cab('Lista de materia prima');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $query="select * from productos.productobruto";
    $con=basedatos($query);
?>
    <h1 class="page-header">Listado</h1>
     <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Materia prima
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive" id="modbruto">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><center>Nombre</center></th>
                                            <th><center>Minimo</center></th>
                                            <th><center>Maximo</center></th>
                                            <th><center>Precio</center></th>
                                            <th><center>Unidad</center></th>
                                            <th><center>Imagen</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
    <?php 
        while ($invbruto=pg_fetch_row($con))
        { 
        ?>
                <tr class="odd gradeX">
                        <td><center><?php echo $invbruto[1];?></center></td>
                        <td><center><?php echo $invbruto[2];?></center></td>
                        <td><center><?php echo $invbruto[3];?></center></td>
                        <td><center><?php echo $invbruto[4];?></center></td>
                        <td><center><?php echo $invbruto[6];?></center></td>
                        <td><center><img src="<?php echo $invbruto[8];?>" /></center></td>
                 </tr>
        <?php  
        }?>
                </table>
            </center>
<?php
    pie();
?>