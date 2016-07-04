<?php
session_start();
require_once("conexion.php"); $x = new DC();        $conex = $x->ConexDb();
class blog
{
	public function nueva_sesion()
	{
		//recogemos las variables post del formulario
		$email = $_POST['email'];
		$password = md5($_POST['pass']); 
		//realizamos la consulta sql 
		//colocamos script_tags para eliminar las etiquetas html y php, por si vienen
	    $query = "SELECT 
		* 
		FROM
		csis_usuarios
		WHERE email='".strip_tags($email)."' 
		AND
		pass='".strip_tags($password)."';";
	    
		//ejecutamos la consulta y guardamos el resultado en la variable resultado
		$resultado = mysql_query($query);
		//si el numero de filas devuelto por la variable resultado es 1,
		//lo que significa que en la base de datos blog, en la tabla usuarios
		//existe una fila que coincide con los datos ingresados
		//nos envie a logueado.php, que seria como el home de nuestra pagina,
		//en otro caso, nos deja en nueva_sesion, con una variable get llamada usuario
		//y con el valor no_existe
		if ($reg=mysql_num_rows($resultado) == 0){
			header("Location:index.php?usuario=no_existe");
		}else{
			
		}
		if($reg=mysql_fetch_array($resultado)){
			$_SESSION['nick'] 			= $reg['email'];
			$_SESSION['idrol']  		= $reg['idrol'];
			$_SESSION['idubicacion'] 	= $reg['idubicacion'];	
			$_SESSION['nombre_usuario'] = $reg['nombre_usuario'];
			$_SESSION['idusuario'] 		= $reg['idusuario'];
			header("Location:six.php");
		}
	}
}
?>
