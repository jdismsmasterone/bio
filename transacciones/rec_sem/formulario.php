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
$cbotones = new CrearBotones();

?>
<div class="panel-group" id="accordion_formulario" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		
		<div class="panel-heading" role="tab" id="sub_accordionformulario"  data-toggle="tooltip" data-placement="bottom" title="Mostrar/Ocultar">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion_formulario" href="#collapseaccordionformulario" aria-expanded="true" aria-controls="collapseaccordionformulario">DATOS GENERALES</a></h4>		
		</div>
	
		<div id="collapseaccordionformulario" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="sub_accordionformulario">
			<div class="panel-body">
			
			<form class="form-horizontal" role="form" id="formulario_registro" style="padding: 3px; ">		
			
			   <div class="form-group form-group-sm">    
			    
				    <div class="row">
				    	<div class="col-xs-2">	<?php $crearcampo->Label($Arr_idrecepcion);		$crearcampo->CrearInputText($Arr_idrecepcion);	?>	</div>					    
						<div class="col-xs-2">	<?php $crearcampo->Label($Arr_fecha);			$crearcampo->CrearInputText($Arr_fecha);		?> 	</div>
				    	<div class="col-xs-8">	<?php $crearcampo->Label($Arr_clientes);		$crearcampo->Combobox($Arr_clientes);			?> 	</div>																													      						      	
			       </div>	       
				   <div class="row">
				   		<div class="col-xs-6">	<?php $crearcampo->Label($Arr_entrego);		$crearcampo->CrearInputText($Arr_entrego);		?></div>
				        <div class="col-xs-6">	<?php $crearcampo->Label($Arr_recibio);		$crearcampo->CrearInputText($Arr_recibio);		?></div>
				   </div>  		
				
				</div>  		
			</form>
			
			</div>
		</div>
	</div>
</div>

<div class="" id="conector"><?php include_once 'conector.php';  ?> </div>


		


<script type="text/javascript"> 

$(function () {
	$(".chosen").chosen();
	ListadoDetalle();
	
})
</script>
<?php } ?>