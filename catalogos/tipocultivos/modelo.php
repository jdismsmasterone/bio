<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php
require_once 'includes.inc';


class class_Registro extends datosMysql {
	
	
	public function __construct() {
		$this->tabla1  		= 'cat_tipocultivo';
		$this->idtabla1 	= 'idtipocultivo';
		$this->campo01 		= 'nombre_tipocultivo';

		$this->id 			= $_POST[id];
		$this->cam01 		= $_POST[nombre_tipocultivo];
			
	}
	
	public function ValidarCampos(){		
	
		$x	= "";		
		
		if ($this->cam01=="") {	$x ="| Nombre Tipo Cultivo |";	}	return $x;	}
		
	public function Guardar() {

		$x 	= $this->ValidarCampos();			
		if($x==""){
			
			if($this->id==""){	
				$sql = " INSERT INTO $this->tabla1 ( $this->campo01 ) VALUES ('".$this->cam01."')"; 					
			}else {
				$sql = " UPDATE $this->tabla1 SET  $this->campo01 ='".$this->cam01."' WHERE $this->idtabla1=".$this->id  ;
			}
			
			$x=$this->Query($sql);			
				if($x){ 
					print 1;
				}		
			}else{			
				print $x;		
			}
	}
		
	public function Eliminar() {		
	
		$sql	= "DELETE FROM $this->tabla1 WHERE $this->idtabla1=".$this->id;
		$this->Query($sql);
	}
}




$c = new class_Registro();
switch ($_POST['solicitud']) {
	
	case "guardar":
		
		$c->Guardar();
		break;
	case "eliminar":
		
		$c->Eliminar();
		break;
	default:
			return 0;
		break;
		
}
?><?php } ?>