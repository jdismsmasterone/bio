<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido"; }else{?>



<?php 
	require_once 'includes.inc'; $cbotones = new CrearBotones();
	
	
?>

<h1>COTIZACIONES</h1>

<div style="padding-top: 10px; padding-bottom:10px" id="filtro" >	<?php	include_once 'listado_filtro.php'; ?>	</div>




<div class="container-fluid"><div class="row"><div id="listado"  class="col-xs-12 col-sm-6 col-md-12"></div></div></div>





<div id="myNav" class="overlay">
	<div class="container">	  	
	  	<div class="panel panel-default">	  	
		  	<div class="panel-heading">DATOS GENERALES</div> 
		  	<div class="panel-body">
	  			<div class="overlay-content" id="formulario" ></div>
	  			<div class="overlay-content" id="conector"><?php include_once 'conector.php';  ?> </div>
	  			<div class="panel-footer"    id="pie">	   <?php $cbotones->BotonesGuardado(); ?> </div>
			</div>
		</div>
	</div>
</div>





<script type="text/javascript">
	function openNav() {   document.getElementById("myNav").style.height = "100%";		} 
	function closeNav(){   document.getElementById("myNav").style.height = "0%";	Listado();	}
</script>





<script type="text/javascript" src="modulos/ajax/func_generales.js"></script>
<script type="text/javascript" src="transacciones/cotizaciones/script.js"></script><!-- solo se modifica esta -->

<?php } ?>