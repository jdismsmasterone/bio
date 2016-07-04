<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php 
$id         	= $_POST['campos_url'];	require_once 'includes.inc';
$datosmysql 	= new datosMysql;
$crearcampo 	= new CrearCampos;

if($id!=""){
	$cfcampo    	     	= new Filtro_deCampos();
	$campo      		 	= $cfcampo->ObtenerCampos($id,'cat_presentacion','idpresentacion','nombre_corto','tipo_presentacion');						
	
	$id         		 	= $campo['idpresentacion'];
	$nombre_presentacion	= $campo['nombre_presentacion'];
	$nombre_corto			= $campo['nombre_corto'];
	$tipo_presentacion		= $campo['tipo_presentacion'];

	
}

require_once 'labels.php';


?>

			<form class="form-horizontal" role="form" id="formulario_registro">				 
				  <input type="hidden" class="form-control" id="id" name="id"  value="<?php print $campo['idpresentacion'] ?>">
			 				 
				  <div class="form-group">
					<div class="col-xs-4"><?php $crearcampo->Label($Arr_nombre_presentacion);       $crearcampo->CrearInputText($Arr_nombre_presentacion);	?> </div>
					<div class="col-xs-4"><?php $crearcampo->Label($Arr_nombre_corto);        		$crearcampo->CrearInputText($Arr_nombre_corto);   		?> </div>
					<div class="col-xs-4"><?php $crearcampo->Label($Arr_tipo_presentacion);       	$crearcampo->CrearInputText($Arr_tipo_presentacion);    ?> </div>
				  </div>				  			  				  
  				
			</form>
	
		


<script type="text/javascript"> 

$(function () {
	$(".chosen").chosen();
})
</script>
<?php } ?>