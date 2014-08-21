<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(isset($_SESSION['nivel']) and ($_SESSION['estado'] == 'autenticado'))
 {
	 session_unset();
	 session_destroy();
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