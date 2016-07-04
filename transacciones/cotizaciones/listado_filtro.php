<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php 
require_once 'includes.inc';
require_once 'labels.php';
$crearcampo   = new CrearCampos;
$crearbotones = new CrearBotones; 

?>


<div class="panel-group" id="accordion_fbusqueda" role="tablist" aria-multiselectable="true">

  	<div class="panel panel-default">
  		
	  	<div class="panel-heading" role="tab" id="fbusqueda"  data-toggle="tooltip" data-placement="bottom" title="Mostrar/Ocultar">
			<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion_fbusqueda" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Filtro de Busqueda</a></h4>		
		</div>
		
		
		<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="fbusqueda">
			<div class="panel-body">
				 <form role="form">
				    <div class="form-group form-group-sm">
				    
					    <div class="row">
					    	<div class="col-xs-2">	<?php $crearcampo->Label($Arrfiltro_idcotizacion);   	$crearcampo->CrearInputText($Arrfiltro_idcotizacion);   ?></div>					    
							<div class="col-xs-2">	<?php $crearcampo->Label($Arrfiltro_fecha);        	$crearcampo->CrearInputText($Arrfiltro_fecha);         	?></div>
					    	<div class="col-xs-6">	<?php $crearcampo->Label($Arr_idcliente);	    		$crearcampo->Combobox($Arr_idcliente);            		?></div>
					    	<div class="col-xs-2">	<?php $crearcampo->Label($Arr_OrdenarPor);    		$crearcampo->ComboboxCompuesto($Arr_OrdenarPor); 		?></div>					      						      	
				       </div>
				       
					   <div class="row">					   		
					   		 <div class="col-xs-2">  <?php $crearcampo->Label($Arr_sqlorden);	    	$crearcampo->Combobox($Arr_sqlorden);	       			?>  </div>
						     <div class="col-xs-2">  <?php $crearcampo->Label($Arr_sqlnregistros);		$crearcampo->Combobox($Arr_sqlnregistros);	   			?>  </div>
					   </div>  
					   
				       <div class="row" style="padding-top: 10px;">
				       <?php  $crearbotones->BotonesFiltro(); ?>
				      
				       </div>
					       
				    </div>
  				</form>
			 </div>
		</div>
		
		
	</div>
			  
</div>
	<script type="text/javascript">
$(function () {	
	$(".chosen").chosen();	
	$('[data-toggle="tooltip"]').tooltip();	
	$('.datepicker').datepicker({
	    format: 'yyyy-mm-dd',
	    startDate: '-300d'
	});
});
</script>
	
	
	
<?php } ?>