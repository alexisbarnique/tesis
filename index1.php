<?php
session_start();

if(isset($_SESSION['nivel']) and ($_SESSION['estado'] = 'autenticado'))
{   
    include ('libreria.php');

    cab('Inversiones Verfresk C.A.');
?>
<h1 class="page-header">Bienvenido: Encargado</h1>
	<center>
		<form action="inser_cliente.php">
   			<button type="submit" class="btn btn-primary btn-circle btn-xl" title="Agregar clientes"><i class="fa fa-list"></i>
            </button>
        </form>
        <form action="venta.php">
            <button type="submit" class="btn btn-success btn-circle btn-xl" title="Realizar una venta"><i class="fa fa-link"></i>
            </button>
        </form>
                            <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i>
                            </button>
                            </center>
                            
<?php
}
else
{
?>
<script language="javascript">
    alert("Usuario no Logueado o No posee permisos");
    self.location="login.html";
</script>
<?php
}
    pie();
?>