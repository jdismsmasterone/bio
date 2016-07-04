<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php 
$id         	= $_POST['campos_url'];	require_once 'includes.inc';
$datosmysql 	= new datosMysql;
$crearcampo 	= new CrearCampos;

if($id!=""){
	$cfcampo    	= new Filtro_deCampos();
	$campo      	= $cfcampo->ObtenerCampos($id,'csis_usuarios','idusuario');						
	$id         	= $campo['idusuario'];
	$idubicacion	= $campo['idubicacion'];
	$idrol			= $campo['idrol'];
	$email			= $campo['email'];
	$nombre_usuario			= $campo['nombre_usuario'];
}

require_once 'labels.php';


?>

			<form class="form-horizontal" role="form" id="formulario_registro">				 
				  <input type="hidden" class="form-control" id="id" name="id"  value="<?php print $campo['idusuario'] ?>">
			 				 
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="nombre_usuario">Nombre:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre de Usuario" value="<?php print $Arr_nombre_usuario['value'] ?>">
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email:</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" id="email"  name="email" placeholder="Enter email" value="<?php  print $Arr_email['value'] ?>"  autocomplete="off">
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="idubicacion">Ubicaci&oacute;n:</label>
				    <div class="col-sm-5">
				      <?php $crearcampo->Combobox($Arr_ubicaciones); ?>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="idrol">Rol:</label>
				    <div class="col-sm-5">
				      <?php $crearcampo->Combobox($Arr_roles); ?>
				    </div>
				  </div>	  	   	  
				  
				  <div class="form-group">
			    <label class="control-label col-sm-2" for="pass">Password:</label>
			    <div class="col-sm-5"> 
			      <input type="password" class="form-control"  id="pass" name="pass" placeholder="Enter password"  autocomplete="off">
			    </div>
			  </div>	  				
			</form>
	
		


<script type="text/javascript"> 

$(function () {
	$(".chosen").chosen();
})
</script>
<?php } ?>