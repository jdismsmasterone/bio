<?php
session_start();
session_destroy();
$store='store'.$_SESSION['nick'];

unlink($store);
echo"<script type='text/javascript'>
	 alert('La sesion fue cerrada correctamente');
	window.location='index.php';
	</script>";
?>


