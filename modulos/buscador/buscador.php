<div class="panel panel-info ">
  <div class="panel-body">
    	<div class="input-group">
			  <div class="input-group-btn">
			   <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Crear un nuevo registro" type="button" id="nuevo">Nuevo <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
			   <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Buscar..." type="button" id="buscar">Buscar <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			  </div>
			  <input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="Ingresa algun texto para su busqueda" aria-label="...">
		</div>
  </div>
</div>






<script>	
$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
})
</script>