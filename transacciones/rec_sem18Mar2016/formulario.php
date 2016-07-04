<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido'"; }else{?><?php 
$id         	= $_POST['campos_url'];	require_once 'includes.inc';
$c=new class_Registro; $c->CrearTablaTemp();
$datosmysql 	= new datosMysql;
$crearcampo 	= new CrearCampos;
$fglobales		= new FunctionesGlobales;
$fecha 			= $fglobales->CurrencyDate();
if($id!=""){
	$c=new class_Registro; $c->CopiarDatosATablaTemp($id);
	$cfcampo    	= new Filtro_deCampos();
	$campo      	= $cfcampo->ObtenerCampos($id,'tra_irs_a','idrecepcion');						
	$idrecepcion    = $campo['idrecepcion'];
	$idcliente		= $campo['idcliente'];
	$fecha			= $campo['fecha'];
	$entrego		= $campo['entrego'];
	$recibio		= $campo['recibio'];
	$observaciones	= $campo['observaciones'];
	
}

require_once 'labels.php';


?>
<form class="form-horizontal" role="form" id="formulario_registro" style="padding: 10px;">		

    <div class="form-group form-group-sm"></div>	    
    
	    <div class="row">
	    	<div class="col-xs-2">	<?php $crearcampo->Label($Arr_idrecepcion);		$crearcampo->CrearInputText($Arr_idrecepcion);	?>	</div>					    
			<div class="col-xs-2">	<?php $crearcampo->Label($Arr_fecha);			$crearcampo->CrearInputText($Arr_fecha);		?> 	</div>
	    	<div class="col-xs-8">	<?php $crearcampo->Label($Arr_clientes);		$crearcampo->Combobox($Arr_clientes);			?> 	</div>																											      						      	
       </div>	       
	   <div class="row">
	   		<div class="col-xs-6">	<?php $crearcampo->Label($Arr_entrego);		$crearcampo->CrearInputText($Arr_entrego);		?></div>
	        <div class="col-xs-6">	<?php $crearcampo->Label($Arr_recibio);		$crearcampo->CrearInputText($Arr_recibio);		?></div>
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