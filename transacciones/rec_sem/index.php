<?php 	session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido"; }else{		?>

<?php 	require_once 'includes.inc'; $cbotones = new CrearBotones();	?>



<div style="padding-top: 5px; padding-bottom:5px" id="filtro" >	<?php	include_once 'listado_filtro.php'; ?>	</div>

<div id="listado"  ></div>

<div class="overlay_encabezado" id="formulario" ></div>

<div class="row" style=" padding-top:4px;">
   	<div class="col-xs-5">
   		<?php $cbotones->BotonesGuardado2();?>
   	</div>
</div>	

<script type="text/javascript" src="modulos/ajax/func_generales.js"></script>
<script type="text/javascript" src="transacciones/rec_sem/script.js"></script><!-- solo se modifica esta -->

<?php } ?>