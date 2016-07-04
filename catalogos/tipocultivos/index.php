<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?>
<div style="padding-top: 10px; padding-bottom:10px" id="filtro" >	<?php	include_once 'listado_filtro.php'; ?>	</div>

<div class="container-fluid"><div class="row"><div id="listado"  class="col-xs-12 col-sm-6 col-md-12"></div></div></div>

 



<div id="myNav" class="overlay">
	<div class="container">
  <h2>CATALOGO DE TIPO DE CULTIVOS</h2>
  	<div class="panel panel-default">
	  	<div class="panel-heading">Tipo de Cultivos</div>
	  	<div class="panel-body">
  			<div class="overlay-content" id="formulario" >  </div>
  			<div class="panel-footer">
				<button type="button" class="btn btn-success guardar" id="guardarsalir" onclick="GuardarSalir();" data-loading-text="Loading..." class="btn btn-primary" >Guardar/Salir</button>
				<button type="button" class="btn btn-info  guardar" id="guardarcontinuar" onclick="GuardarContinuar();" data-loading-text="Loading..." class="btn btn-primary" >Guardar/Nuevo</button>
				<button type="button" class="btn btn-warning"  onclick="closeNav();">Cerrar</button>
			</div>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">


function openNav() {
    document.getElementById("myNav").style.height = "100%";
    //Formulario();
}
 
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
<script type="text/javascript" src="modulos/ajax/func_generales.js"></script>
<script type="text/javascript" src="catalogos/tipocultivos/script.js"></script>

<?php } ?>