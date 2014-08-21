<?php
    include ('libreria.php');
    cab('Lista de clientes');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $query="select * from clientes.cliente where estado='t'";
    $con=basedatos($query);
?>
    <h1 class="page-header">Clientes</h1>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
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
        while ($modcli=pg_fetch_row($con))
        { 
        ?>
                <tr>
                    <td class="idcli"><?php echo $modcli[2];?></td>
                        <td><?php echo $modcli[1];?></td>
                        <td><?php echo $modcli[4];?></td>
                        <td><?php echo $modcli[5];?></td>
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
