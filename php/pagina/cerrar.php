<?php

/* 
 * Cierre de sesion y envio al login.
 */

session_start();
if(isset($_SESSION['nivel']) and ($_SESSION['estado'] == 'autenticado'))
 {
	 session_unset();
	 session_destroy();
	 session_start();
	 header("Location:../../login.html");
 }
 else
 {?>
<script type="text/javascript">
	alert("ERROR de Logout");
	self.location="../../login.html";
</script>
<?php
 }
