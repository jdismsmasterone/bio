<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php
require_once 'includes.inc';
class class_Usuarios extends datosMysql {
	public function ValidarCampos(){		$email			= $_POST[email];				$idrol			= $_POST[idrol];				$idubicacion	= $_POST[idubicacion];				$nombre_usuario	= $_POST[nombre_usuario];		$x				= "";		if ($email=="") 		{	$x ="| Email |";		}		if ($idrol=="") 		{	$x.="| Rol |";		}		if ($idubicacion=="") 	{	$x.="| Ubicacion |";		}		if ($nombre_usuario==""){	$x.="| Nombre de Usuario |";		}				return $x;	}
	public function Guardar() {
		$id 			= $_POST[id];
		$email			= $_POST[email];
		$idrol			= $_POST[idrol];
		$idubicacion	= $_POST[idubicacion];
		$nombre_usuario	= $_POST[nombre_usuario];
		$pass			= $_POST[pass];				$x 				= $this->ValidarCampos();				if($x==""){
			if($id==""){$sql = " INSERT INTO csis_usuarios (idubicacion, idrol, nombre_usuario, email, pass ) VALUES ('".$idubicacion."','".$idrol."','".$nombre_usuario."',"."'".$email."',"."'".$pass."')"; }			else {								if($pass==""){ $sql ="UPDATE csis_usuarios SET idubicacion='".$idubicacion."',idrol='".$idrol."',nombre_usuario='".$nombre_usuario."',email='".$email."' WHERE idusuario=".$id ;}				else { $sql ="UPDATE csis_usuarios SET idubicacion='".$idubicacion."',nombre_usuario='".$nombre_usuario."',email='".$email."',pass='".$pass."' WHERE idusuario=".$id ;	}									}
			$x=$this->Query($sql);			if($x){ print 1;}		}else{			print $x;		}
	}
	
	public function Eliminar() {		$id 	= $_POST[id];		$sql	= "DELETE FROM csis_usuarios WHERE idusuario=".$id;
		$this->Query($sql);
	}
}

switch ($_POST['solicitud']) {
	
	case "guardar":
		$c = new class_Usuarios;
		$c->Guardar();
		break;
	case "eliminar":
		$c = new class_Usuarios;
		$c->Eliminar();
		break;
	default:
			return 0;
		break;
		
}
?><?php } ?>