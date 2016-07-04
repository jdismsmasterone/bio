<!-- 
<div class="panel panel-default" >
	<div class="panel-heading">
	<h3 class="panel-title">Articulos</h3>
	</div>
	<div class="panel-body">
	<div id="formulario_detalle"></div>
	</div>
</div>-->

<div id="myNavFdetalle" class="overlay">
	<div class="container">
	  	
	  	<div class="panel panel-success">
		  	<div class="panel-heading" style=" text-align: center;">AGREGAR PRODUCTOS A LA RECEPCION DE SEMILLA</div>
		  	<div class="panel-body">
	  			<div class="overlay-content" id="formulario_detalle" >  </div>
	  			<div class="overlay-content" ></div>
	  			<div class="panel-footer">	  				
					<button type="button" class="btn btn-success guardar" 	onclick="GuardarSalirDetalle();"		id="guardarsalir" 		data-loading-text="Loading..." class="btn btn-primary" >Guardar/Salir</button>
					<button type="button" class="btn btn-info  guardar" 	onclick="GuardarContinuarDetalle();" 	id="guardarcontinuar" 	data-loading-text="Loading..." class="btn btn-primary" >Guardar/Nuevo</button>
					<button type="button" class="btn btn-warning"  			onclick="closeNavDetalle();">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="listado_detalle"></div>

<script type="text/javascript">

function openNavDetalle() {
    document.getElementById("myNavFdetalle").style.height = "100%";
    
}
 
function closeNavDetalle() {
    document.getElementById("myNavFdetalle").style.height = "0%";
    ListadoDetalle();
}
</script>