<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php 
$id         	= $_POST['campos_url'];	require_once 'includes.inc';
$datosmysql 	= new datosMysql;
$crearcampo 	= new CrearCampos;

if($id!=""){
	$cfcampo    	     = new Filtro_deCampos();
	$campo      		 = $cfcampo->ObtenerCampos($id,'cat_tipocultivo','idtipocultivo');						
	
	$id         		 = $campo['idtipocultivo'];
	$nombre_tipocultivo	 = $campo['nombre_tipocultivo'];

	
}

require_once 'labels.php';


?>

			<form class="form-horizontal" role="form" id="formulario_registro">				 
				  <input type="hidden" class="form-control" id="id" name="id"  value="<?php print $campo['idtipocultivo'] ?>">
			 				 
				  <div class="form-group">
					<div class="col-xs-4"><?php $crearcampo->Label($Arr_nombre_tipocultivo);        $crearcampo->CrearInputText($Arr_nombre_tipocultivo);    ?> </div>
				  </div>				  			  				  
  				
			</form>
	
		


<script type="text/javascript"> 

$(function () {
	$(".chosen").chosen();
})
</script>
<?php } ?>