<?php
    include ('libreria.php');
    cab('Modificar clientes');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $query="select * from clientes.cliente where estado='t'";
    $con=basedatos($query);
?>
<style type="text/css">
    td#idcli{ cursor: pointer;}
</style>
    <h1 class="page-header">Modificar clientes</h1>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Clientes
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
                    <td class="idcli" id="idcli"><?php echo $modcli[2];?></td>
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
