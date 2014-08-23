<?php
    include ('libreria.php');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    cab('Cierre del día');
?>
    <h1 class="page-header">Cierre</h1>
    <div class="row">
       <div class="col-lg-12">
         <div class="panel panel-success">
          <div class="panel-heading">
          </div>
        <div class="panel-body">
          <div class="row">
                <div class="col-lg-6">
                  <form role="form">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Materia prima en cavas
                        </div>
                         <div class="panel-body">
                               <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>Producto</center></th>
                                            <th><center>Cantidad</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $query="select id, nombre from productos.productobruto where estado='t'";
                                      $con=basedatos($query);
                                      while($row=pg_fetch_row($con))
                                      {
                                      ?>
                                      <tr class="odd gradeX">
                                        <td><?php echo $row[1];?></td>
                                        <td><center><input class='form-control' type='text' name='cant_b' id='cant_b' min='1' placeholder='0' autofocus /></center></td>
                                      </tr>
                                        <?php   
                                        }
                                        ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Producto final en cavas
                        </div>
                        <div class="panel-body">
                               <table class="table table-striped table-bordered table-hover" id="modfinal">
                                    <thead>
                                        <tr>
                                            <th><center>Producto</center></th>
                                            <th><center>Cantidad</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $query="select id, nombre from productos.productofinal where estado='t'";
                                      $con=basedatos($query);
                                      while($row=pg_fetch_row($con))
                                      {
                                      ?>
                                        <tr class="odd gradeX">
                                          <td><?php echo $row[1];?></td>
                                          <td><center><input class='form-control' type='text' name='cant_f' id='cant_f' min='1' placeholder='0' autofocus /></center></td>
                                        </tr>
                                      <?php   
                                      }
                                      ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Dinero en caja
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Monto</label>
                                    <input class="form-control" name="me" id="me" min="1" type="number"required/>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Egresos
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <table class="table table-striped table-bordered table-hover" id="modfinal">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th><center>Concepto</center></th>
                                            <th><center>Monto</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                          <td>1</td>
                                          <td><center><input class='form-control' type='text' name='gasto' id='gasto' placeholder='Desayunos' autofocus /></center></td>
                                          <td><center><input class='form-control' type='text' name='m_gasto' id='m_gasto' min='1' placeholder='0' /></center></td>
                                        </tr>
                                         <tr class="odd gradeX">
                                          <td>2</td>
                                          <td><center><input class='form-control' type='text' name='gasto' id='gasto' /></center></td>
                                          <td><center><input class='form-control' type='text' name='m_gasto' id='m_gasto' min='1' placeholder='0' /></center></td>
                                        </tr>
                                         <tr class="odd gradeX">
                                          <td>3</td>
                                          <td><center><input class='form-control' type='text' name='gasto' id='gasto'  /></center></td>
                                          <td><center><input class='form-control' type='text' name='m_gasto' id='m_gasto' min='1' placeholder='0' /></center></td>
                                        </tr>
                                         <tr class="odd gradeX">
                                          <td>4</td>
                                          <td><center><input class='form-control' type='text' name='gasto' id='gasto'  /></center></td>
                                          <td><center><input class='form-control' type='text' name='m_gasto' id='m_gasto' min='1' placeholder='0' /></center></td>
                                        </tr>
                                         <tr class="odd gradeX">
                                          <td>5</td>
                                          <td><center><input class='form-control' type='text' name='gasto' id='gasto'  /></center></td>
                                          <td><center><input class='form-control' type='text' name='m_gasto' id='m_gasto' min='1' placeholder='0' /></center></td>
                                        </tr>
                                         <tr class="odd gradeX">
                                          <td>6</td>
                                          <td><center><input class='form-control' type='text' name='gasto' id='gasto'  /></center></td>
                                          <td><center><input class='form-control' type='text' name='m_gasto' id='m_gasto' min='1' placeholder='0' /></center></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
             </div>
                <center><button name="sub" type="submit" class="btn btn-outline btn-success">Registrar</button>
                <button type="reset" class="btn btn-outline btn-warning">Borrar</button></center>
                </form>
            </div>
              <div class="panel-footer">
              </div>
          </div>
        </div>
    <?php
    pie();
?>