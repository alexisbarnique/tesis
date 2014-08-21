<?php
    include ('libreria.php');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd(); 
    cab('Realizar una venta');
?>
<h1 class="page-header">Realizar</h1>
   <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Ventas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Button trigger modal -->
                        <div class="panel-body">
                         
                            <div>
                                <label>Cliente</label>
                                 <button type="button" class="btn btn-success btn-circle" data-toggle="modal" data-target="#myModal1"><i class="fa fa-link"></i>
                                </button>
                                <input class="form-control" name="ven_cli" type="text" autofocus required>
                             </div>
                            </div>
   
                            <div class="panel-body">
                            <label>Productos</label>
                             <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#myModal"><i class="fa fa-list"></i>
                            </button>
                            <!-- Modal 1-->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Seleccionar cliente</h4>
                                        </div>
                                        <div class="modal-body">
                                          <?php
                                            $query1="SELECT razon, rif, id FROM clientes.cliente WHERE estado='t'";
                                            $con1=basedatos($query1);
                                        ?>    
                            <div class="table-responsive" id="selprodf">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th><center>Razon</center></th>
                                            <th><center>Rif</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php 
                                    while ($selc=pg_fetch_row($con1))
                                    { 
                                    ?>
                                            <tr class="odd gradeX">
                                                <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="?php echo $selc[2];?>"></td>
                                                <td class="idprof"><center><?php echo $selc[0];?></center></td>
                                                <td><center><?php echo $selc[1];?></center></td>
                                             </tr>
                                    <?php  
                                    }?>
                                    </tbody>
                                </table>
                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Seleccionar producto</h4>
                                        </div>
                                        <div class="modal-body">
                                        <?php
                                            $query="SELECT nombre, precio, id FROM productos.productofinal WHERE estado='t'";
                                            $con=basedatos($query);
                                        ?>    
                            <div class="table-responsive" id="selprodf">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th><center>Nombre</center></th>
                                            <th><center>Precio</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php 
                                    while ($selp=pg_fetch_row($con))
                                    { 
                                    ?>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" name="optionsRadios" id="optionsRadios1" value="?php echo $selp[2];?>"></td>
                                                <td class="idprof"><center><?php echo $selp[0];?></center></td>
                                                <td><center><?php echo $selp[1];?></center></td>
                                             </tr>
                                    <?php  
                                    }cerrar($enlace);?>
                                    </tbody>
                                </table>
                            </div>
                                         </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Aceptar</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <div class="panel-body">
                            <form action="" enctype="multipart/form-data" method="post">
                                <div class="table-responsive" id="selprodv">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <th colspan="5"><center>Venta </center></th>
                                            <tr>
                                                <th>Id </th>
                                                <th>Nombre </th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Total</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tfoot>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            <center><button name="sub" type="submit" class="btn btn-outline btn-success">Facturar</button>
                            <button type="reset" class="btn btn-outline btn-warning">Borrar</button>
                            <button type="reset" class="btn btn-outline btn-primary">Credito</button>
                            </center>
                            </div>
                         </form>  
                        </div> 
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
    <?php
    pie();
?>