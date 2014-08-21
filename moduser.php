<?php
    include ('libreria.php');
    cab('Modificar usuarios');
    include "php/pagina/pgsql.php";
    $enlace=conectarAd();
    $query="select p.cedula, p.nombre, p.telefono1, p.telefono2, u.id, u.nombre, n.nombre from personas as p, usuarios as u, niveles as n where u.id_persona=p.id and u.nivel=n.id and p.estado='t'";
    $con=basedatos($query);
?>
<style type="text/css">
    td#idus{ cursor: pointer;}
</style>
    <h1 class="page-header">Modificar usuarios</h1>
     <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="moduser">
                                    <thead>
                                        <tr>
                                            <th><center>Cedula</center></th>
                                            <th><center>Nombre</center></th>
                                            <th><center>Usuario</center></th>
                                            <th><center>Tipo</center></th>
                                            <th><center>Telefono 1</center></th>
                                            <th><center>Telefono 2</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
    <?php 
        while ($modusuario=pg_fetch_row($con))
        { 
        ?>
                <tr class="odd gradeX">
                    <td id="idus"><center><?php echo $modusuario[0];?></center></td>
                        <td><center><?php echo $modusuario[1];?></center></td>
                        <td><center><?php echo $modusuario[5];?></center></td>
                        <td><center><?php echo $modusuario[6];?></center></td>
                        <td><center><?php echo $modusuario[2];?></center></td>
                        <td><center><?php echo $modusuario[3];?></center></td>
                 </tr>
        <?php  
        } cerrar($enlace);
        ?>
                </table>
            </center>
<?php
    pie();
?>