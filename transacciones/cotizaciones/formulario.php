<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido'"; }else{?><?php 

$id         	= 	$_POST['campos_url'];	require_once 'includes.inc';
$c				= 	new class_Registro; $c->CrearTablaTemp();
$datosmysql 	= 	new datosMysql;
$crearcampo 	= 	new CrearCampos;
$fglobales		= 	new FunctionesGlobales;
$fecha 			= 	$fglobales->CurrencyDate();

if($id!=""){
	
	$c=new class_Registro; $c->CopiarDatosATablaTemp($id);
	$cfcampo    		= new Filtro_deCampos();
	$campo      		= $cfcampo->ObtenerCampos($id,'tra_cot_a','idcotizacion');						
	$idcotizacion   	= $campo['idcotizacion'];
	$idcliente			= $campo['idcliente'];
	$nombre_mostrador	= $campo['nombre_mostrador'];
	$domicilio			= $campo['domicilio'];
	$fecha				= $campo['fecha'];
	$observaciones		= $campo['observaciones'];
	
}

require_once 'labels.php';


?>
<form class="form-horizontal" role="form" id="formulario_registro" style="padding: 10px;">		

    <div class="form-group form-group-sm"></div>	    
    
	    <div class="row">
	    	<div class="col-xs-2">	<?php $crearcampo->Label($Arr_idcotizacion);		$crearcampo->CrearInputText($Arr_idcotizacion);	?>	</div>
	    	<div class="col-xs-2">	<?php $crearcampo->Label($Arr_fecha);				$crearcampo->CrearInputText($Arr_fecha);		?>	</div>
	    	<div class="col-xs-8">	<?php $crearcampo->Label($Arr_idcliente);			$crearcampo->Combobox($Arr_idcliente);	?>	</div>					    								      						      
       </div>	       
	   <div class="row">
	   		<div class="col-xs-6">	<?php $crearcampo->Label($Arr_nombre_mostrador);	$crearcampo->CrearInputText($Arr_nombre_mostrador);		?> 	</div>
	    	<div class="col-xs-6">	<?php $crearcampo->Label($Arr_domicilio);			$crearcampo->CrearInputText($Arr_domicilio);					?> 	</div>
	   </div>  		
			
</form>



	
		


<script type="text/javascript"> 

$(function () {
	$(".chosen").chosen();
	ListadoDetalle();
	/*$('.datepicker').datepicker({
	    format: 'yyyy-mm-dd',
	    startDate: '-300d'
	});*/
})
</script>
<?php } ?>