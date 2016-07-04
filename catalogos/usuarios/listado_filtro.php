<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php 
require_once 'includes.inc';
require_once 'labels.php';
$crearcampo = new CrearCampos;

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
						      <div class="col-xs-2">  <?php $crearcampo->Label($Arr_roles);		    $crearcampo->Combobox($Arr_roles);			?>      </div>
						      <div class="col-xs-2">  <?php $crearcampo->Label($Arr_ubicaciones);	$crearcampo->Combobox($Arr_ubicaciones);	?>      </div>
						      <div class="col-xs-3">  <?php $crearcampo->Label($Arr_usuarios);	    $crearcampo->Combobox($Arr_usuarios);	    ?>		</div>
						      <div class="col-xs-1">  <?php $crearcampo->Label($Arr_sqlorden);	    $crearcampo->Combobox($Arr_sqlorden);	    ?>      </div>
						      <div class="col-xs-1">  <?php $crearcampo->Label($Arr_sqlnregistros);	$crearcampo->Combobox($Arr_sqlnregistros);	?>      </div>
					       </div>
					       
					       <div class="row" style="padding-top: 10px;">
							   <div class="btn-group col-sm-4" >
								<button id="nuevo" type="button" class="btn btn-success" onclick="Formulario();" data-toggle="tooltip" data-placement="top" title="Nuevo Registro" data-loading-text="Loading..." >Nuevo</button>
								<button id="buscar" type="button" class="btn btn-info" onclick="Listado();" data-toggle="tooltip" data-placement="top" title="Mostrar Resultados" data-loading-text="Loading..." >Buscar</button>																	  
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
								<ul class="dropdown-menu">																						    				    							
								<li><a href="#" onclick="Filtro();">Actualizar Filtro de Busqueda</a></li>
								</ul>
							   </div>
					       </div>
					       
				    </div>
  				</form>
			 </div>
		</div>
		
		
	</div>
			  
</div>
	<script type="text/javascript">
$(function () {	$(".chosen").chosen();	$('[data-toggle="tooltip"]').tooltip();	});
</script>
	
	
	
<?php } ?>