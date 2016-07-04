<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido "; }else{?><?php 
$id         	= $_POST['campos_url'];	require_once 'includes.inc';
$datosmysql 	= new datosMysql;
$crearcampo 	= new CrearCampos;


if($id!=""){
	$tabla2	 			= 'tra_cot_d';
	$tabla2tmp  		= ' Temp_'.$tabla2.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];
	$cfcampo    		= new Filtro_deCampos();
	$campo      		= $cfcampo->ObtenerCampos($id,$tabla2tmp,'idcotizaciondetalle');						
	$idcotizaciondetalle= $campo['idcotizaciondetalle'];
	$idcotizacion    	= $campo['idcotizacion'];
	$idproducto			= $campo['idproducto'];
	$plantas			= $campo['plantas'];
	$lote				= $campo['lote'];
	$precio				= $campo['precio'];
	$variedad_detalle	= $campo['variedad_detalle'];
	$patron_detalle		= $campo['patron_detalle'];
	$fecha_siembra		= $campo['fecha_siembra'];
	$fecha_embarque		= $campo['fecha_embarque'];
	$material_empaque	= $campo['material_empaque'];
	$ikp				= $campo['ikp'];
	$block			    = $campo['block'];
	$status				= $campo['status'];
	
}

require_once '../labels.php';


?>
<style>
 .row{
 		padding-top: 5px;
 }
</style>
<form class="group" role="form" id="formulario_registro_d" style="padding: 10px; padding-top: 1px;">		
	
	 <div class="row">
	 	<div class="col-xs-7">		
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arr_idproducto);				$crearcampo->Combobox($Arr_idproducto);      				?> </div>
	    </div>
	 </div>
	 <div class="row">
	 	<div class="col-xs-3">   
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arr_lote); 						$crearcampo->CrearInputText($Arr_lote);   					?>	</div>
	    </div>
	 </div>
	 <div class="row">
	 	<div class="col-xs-3">
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arr_plantas); 					$crearcampo->CrearInputText($Arr_plantas);   				?>	</div>
	    </div>
	 </div>	 
	 <div class="row">
	 	<div class="col-xs-3">   
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arr_precio); 					$crearcampo->CrearInputText($Arr_precio);   				?>	</div>
	    </div>
	 </div>
	 <div class="row">
	 	<div class="col-xs-12">   
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arr_variedad_detalle); 			$crearcampo->CrearInputText($Arr_variedad_detalle);   		?>	</div>
	    </div>
	 </div>
	  <div class="row">
	 	<div class="col-xs-12">  
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arr_patron_detalle); 			$crearcampo->CrearInputText($Arr_patron_detalle);   		?>	</div>
	    </div>
	 </div>
	  <div class="row">
	 	<div class="col-xs-3">  
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arrfiltro_fecha_siembra); 		$crearcampo->CrearInputText($Arrfiltro_fecha_siembra);   	?>	</div>
	    </div>
	 </div>
	 <div class="row">
	 	<div class="col-xs-3"> 
	    	<div class="form-group form-group-sm"><?php $crearcampo->Label($Arrfiltro_fecha_embarque); 		$crearcampo->CrearInputText($Arrfiltro_fecha_embarque);   	?>	</div>
    	</div>
	 </div>
    
    
    
 	<?php $crearcampo->CrearInputText($Arr_idcotizaciondetalle);   ?>	       	   		      			
</form>



	
		


<script type="text/javascript"> 

$(function () {
	/*$( "#cantidad_sobres" ).change(function() {
		Total();
	});
	$( "#presentacion" ).change(function() {
		Total();
	});*/

	
	
	$(".chosen").chosen();
	//ListadoDetalle();
	$('.datepicker').datepicker({
	    format: 'yyyy-mm-dd',
	    startDate: '-300d'
	});
})
</script>
<?php } ?>