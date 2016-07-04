<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php
require_once 'includes.inc';
class class_Registro extends datosMysql {
	public function ValidarCampos(){		$nombre_cultivo			= $_POST[nombre_cultivo];				$inicial			= $_POST[inicial];								$x				= "";		if ($nombre_cultivo=="") 		{	$x ="| Nombre Cultivo |";		}		if ($inicial=="") 		{	$x.="| Inicial |";		}			return $x;	}
	public function Guardar() {
		$id 			= $_POST[id];
		$nombre_cultivo	= $_POST[nombre_cultivo];
		$inicial			= $_POST[inicial];
		
		$x 				= $this->ValidarCampos();				if($x==""){
			if($id==""){$sql = " INSERT INTO cat_cultivo (nombre_cultivo, inicial ) VALUES ('".$nombre_cultivo."','".$inicial."')"; }			
			else {	$sql ="UPDATE cat_cultivo SET inicial='".$inicial."', nombre_cultivo='".$nombre_cultivo."' WHERE idcultivo=".$id ;}
			
			$x=$this->Query($sql);			if($x){ print 1;}		}else{			print $x;		}
	}
	
	public function Eliminar() {		$id 	= $_POST[id];		$sql	= "DELETE FROM cat_cultivo WHERE idcultivo=".$id;
		$this->Query($sql);
	}
}

switch ($_POST['solicitud']) {
	
	case "guardar":
		$c = new class_Registro;
		$c->Guardar();
		break;
	case "eliminar":
		$c = new class_Registro;
		$c->Eliminar();
		break;
	default:
			return 0;
		break;
		
}
?><?php } ?>