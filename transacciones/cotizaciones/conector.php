

<div id="myNavFdetalle" class="overlay">
	<div class="overlay-content" id="formulario_detalle" >  </div>
	<button type="button" class="btn btn-success guardar" 	onclick="GuardarSalirDetalle();"		id="guardarsalir" 		data-loading-text="Loading..." class="btn btn-primary" >Guardar/Salir</button>
	<button type="button" class="btn btn-info  guardar" 	onclick="GuardarContinuarDetalle();" 	id="guardarcontinuar" 	data-loading-text="Loading..." class="btn btn-primary" >Guardar/Nuevo</button>
	<button type="button" class="btn btn-warning"  			onclick="closeNavDetalle();">Cerrar</button>
	
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