<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php 
$id         	= $_POST['campos_url'];	require_once 'includes.inc';
$datosmysql 	= new datosMysql;
$crearcampo 	= new CrearCampos;

if($id!=""){
	$cfcampo    	     	= new Filtro_deCampos();
	$campo      		 	= $cfcampo->ObtenerCampos($id,'cat_variedades','idvariedad','idcultivo','porcentaje_aumento');						
	
	$id         		 	= $campo['idvariedad'];
	$nombre_variedad		= $campo['nombre_variedad'];
	$idcultivo				= $campo['idcultivo'];
	$porcentaje_aumento		= $campo['porcentaje_aumento'];

	
}

require_once 'labels.php';


?>

			<form class="form-horizontal" role="form" id="formulario_registro">				 
				  <input type="hidden" class="form-control" id="id" name="id"  value="<?php print $campo['idvariedad'] ?>">
			 				 
				  <div class="form-group">
					<div class="col-xs-4"><?php $crearcampo->Label($Arr_nombre_variedad);       $crearcampo->CrearInputText($Arr_nombre_variedad);		?> </div>
					<div class="col-xs-3"><?php $crearcampo->Label($Arr_idcultivo);				$crearcampo->Combobox($Arr_idcultivo);					?> </div>
					<div class="col-xs-4"><?php $crearcampo->Label($Arr_porcentaje_aumento);    $crearcampo->CrearInputText($Arr_porcentaje_aumento);   ?> </div>
				  </div>				  			  				  
  				
			</form>
	
		


<script type="text/javascript"> 

$(function () {
	$(".chosen").chosen();
})
</script>
<?php } ?>