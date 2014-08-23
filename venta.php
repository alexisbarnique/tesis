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
                                 <select name="fact_cli" class="form-control" required autofocus>
                                    <option value="" selected="selected">Seleccionar</option>
                                <?php
                                $query1="SELECT id, razon FROM clientes.cliente WHERE estado='t'";
                                $result=basedatos($query1);
                                while($row=pg_fetch_row($result))
                                {
                                ?>
                                    <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                                 <?php   
                                }?>
                                </select>
                             </div>
                        </div>
   
                            <div class="panel-body">
                                <label>Productos</label>
                                    <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#myModal"><i class="fa fa-list"></i>
                                    </button>
                                    <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Seleccionar productos</h4>
                                        </div>
                                        <div class="modal-body">
                                        <?php
                                            $query="SELECT nombre, precio, id FROM productos.productofinal WHERE estado='t'";
                                            $con=basedatos($query);
                                        ?>    
                            <div class="table-responsive" id="selprodf">
                                <table class="table table-striped table-bordered table-hover" id="selprodftabla">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th><center>Nombre</center></th>
                                            <th><center>Precio</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                    $i=0; 
                                    while ($selp=pg_fetch_row($con))
                                    { 
                                        $i++;
                                    ?>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" name="optionsRadios" id="sel_<?php echo $selp[2];?>" onclick="lista_p('<?php echo $selp[0];?>','<?php echo $selp[1];?>','<?php echo $selp[2];?>');" value="<?php echo $datosprod;?>"></td>
                                                <td class="idprof"><center><?php echo $selp[0];?></center></td>
                                                <td><center><?php echo number_format($selp[1],2,",",".");?></center></td>
                                             </tr>
                                    <?php  
                                    }cerrar($enlace);?>
                                    </tbody>
                                </table>
                            </div>
                                         </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
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
                                    <table class="table table-striped table-bordered table-hover" id="selprodf1">
                                        <thead>
                                            <th colspan="5"><center>Venta </center></th>
                                            <tr>
                                                <th>Id </th>
                                                <th>Nombre </th>
                                                <th>Cantidad</th>
                                                <th>Precio Unitario</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Subtotal</th>
                                            <th><input type="number" id="subtotal" name="subtotal" class="form-control" value="0.00" readonly ></th>
                                        </tfoot>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            <center><button name="fact" id="fact" type="button" class="btn btn-outline btn-success">Facturar</button>
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
               </div>
           </div>
         </div>
    <?php
    pie();
?>