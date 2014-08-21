<?php
    include ('libreria.php');
    cab('Lista de proveedores');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $query="select rif, razon, telefono1, telefono2 from proveedores.proveedor where estado='t'";
    $con=basedatos($query);
?>
    <h1 class="page-header">Proveedores</h1>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="modcli">
                                    <thead>
                                        <tr>
                                            <th>Rif</th>
                                            <th>Razon</th>
                                            <th>Telefono 1</th>
                                            <th>Telefono 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <?php 
        while ($modprov=pg_fetch_row($con))
        { 
        ?>
                <tr>
                    <td class="idprov"><?php echo $modprov[0];?></td>
                        <td><?php echo $modprov[1];?></td>
                        <td><?php echo $modprov[2];?></td>
                        <td><?php echo $modprov[3];?></td>
                 </tr>
        <?php  
        }?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <?php
    pie();
?>
