<?php 
	session_start();
	session_destroy();
	header("Location:accederCuenta.php");
 ?>