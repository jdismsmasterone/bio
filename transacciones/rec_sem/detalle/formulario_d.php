<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido "; }else{?><?php 
$id         	= $_POST['campos_url'];	require_once 'includes.inc';
$datosmysql 	= new datosMysql;
$crearcampo 	= new CrearCampos;
$cbotones 		= new CrearBotones();

if($id!=""){
	$tabla2	 			= 'tra_irs_d';
	$tabla2tmp  		= ' Temp_'.$tabla2.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];
	$cfcampo    		= new Filtro_deCampos();
	$campo      		= $cfcampo->ObtenerCampos($id,$tabla2tmp,'idrecepciondetalle');						
	$idrecepciondetalle	= $campo['idrecepciondetalle'];
	$idrecepcion    	= $campo['idrecepcion'];
	$idcasacomercial	= $campo['idcasacomercial'];
	$idvariedad			= $campo['idvariedad'];
	$idpatron			= $campo['idpatron'];
	$lote				= $campo['lote'];
	$batch				= $campo['batch'];
	$cantidad_sobres	= $campo['cantidad_sobres'];
	$presentacion		= $campo['presentacion'];
	//$cantidad			= $campo['cantidad'];
	$saldo				= $campo['saldo'];
	$total				= $campo['total'];
	$porgerm			= $campo['porgerm'];
	$fgerm				= $campo['fgerm'];
	
}

require_once '../labels.php';


?>
<style>
 .row{
 		padding-top: 5px;
 }
</style>

<div class="panel panel-success">
		
		<div class="panel-heading" >
			<h4 class="panel-title">Formulario Detalle</h4>		
		</div> 
<div class="panel-body">
		
		
<form class="form-horizontal" role="form" id="formulario_registro_d" style="padding: 10px; padding-top: 1px;">		
	
    <div class="form-group form-group-sm">	    
    	
	    <div class="row">	    	
	    	<div class="col-xs-4"><?php $crearcampo->Label($Arr_casacomercial);	    $crearcampo->Combobox($Arr_casacomercial);            ?></div>
	    	<div class="col-xs-4"><?php $crearcampo->Label($Arr_variedades);	    $crearcampo->Combobox($Arr_variedades);            ?></div>
	    	<div class="col-xs-4"><?php $crearcampo->Label($Arr_patrones);	    	$crearcampo->Combobox($Arr_patrones);            ?></div>
	    	   						      						      	
       </div>	 
        <div class="row">	
        	<div class="col-xs-2"><?php $crearcampo->Label($Arr_batch);   			$crearcampo->CrearInputText($Arr_batch);   ?></div>
        	<div class="col-xs-2"><?php $crearcampo->Label($Arr_cantsobres);   		$crearcampo->CrearInputText($Arr_cantsobres);   ?></div>
        	<div class="col-xs-2"><?php $crearcampo->Label($Arr_presentacion);   	$crearcampo->CrearInputText($Arr_presentacion);   ?></div>        	
        	<div class="col-xs-2"><?php $crearcampo->Label($Arr_total);   			$crearcampo->CrearInputText($Arr_total);   ?></div>
        </div>      	   	
	   	<div class="row">
	   		<div class="col-xs-2"><?php $crearcampo->Label($Arr_porgerm);   		$crearcampo->CrearInputText($Arr_porgerm);   ?></div>
	   		<div class="col-xs-2"><?php $crearcampo->Label($Arr_fgerm);   			$crearcampo->CrearInputText($Arr_fgerm);   ?></div>
	   		<div class="col-xs-3"><?php $crearcampo->Label($Arr_lote);   			$crearcampo->CrearInputText($Arr_lote);   ?></div>	 
	   		<div class="col-xs-1"><?php $crearcampo->CrearInputText($Arr_idrecepciondetalle);   ?></div>
	   	</div>      	   		      
    </div>
 	<div><?php $cbotones->BotonesGuardadoDetalle();?></div>				
</form>

</div>
</div>

	
		


<script type="text/javascript"> 

$(function () {
	$( "#cantidad_sobres" ).change(function() {
		Total();
	});
	$( "#presentacion" ).change(function() {
		Total();
	});

	function Total(){
		//var total = $( "#cantidad_sobres" ).val() * $( "#presentacion" ).val();
		$( "#total" ).val($( "#cantidad_sobres" ).val() * $( "#presentacion" ).val());
	}
	
	$(".chosen").chosen();
	//ListadoDetalle();
	$('.datepicker').datepicker({
	    format: 'yyyy-mm-dd',
	    startDate: '-300d'
	});
})
</script>
<?php } ?>