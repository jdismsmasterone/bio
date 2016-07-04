<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php
require_once 'includes.inc';


class class_Registro extends datosMysql {
	
	
	public function __construct() {
		$this->tabla1  		= 'cat_presentacion';
		$this->idtabla1 	= 'idpresentacion';
		$this->campo01 		= 'nombre_presentacion';
		$this->campo02 		= 'nombre_corto';
		$this->campo03 		= 'tipo_presentacion';
		
		$this->id 			= $_POST[id];
		$this->cam01 		= $_POST[nombre_presentacion];
		$this->cam02 		= $_POST[nombre_corto];
		$this->cam03 		= $_POST[tipo_presentacion];
			
	}
	
	public function ValidarCampos(){		
	
		$x	= "";				
		if ($this->cam01=="") {	$x ="| Nombre Presentacion 	|";	}	
		if ($this->cam02=="") {	$x ="| Nombre Corto			|";	}
		if ($this->cam03=="") {	$x ="| Tipo Presentacion 	|";	}
						
	return $x;	}

		
	public function Guardar() {

		$x 	= $this->ValidarCampos();			
		if($x==""){
			
			if($this->id==""){	
				$sql = " INSERT INTO $this->tabla1 ( $this->campo01,$this->campo02,$this->campo03 ) VALUES ('".$this->cam01."','".$this->cam02."','".$this->cam03."')"; 					
			}else {
				$sql = " UPDATE $this->tabla1 SET  $this->campo01 ='".$this->cam01."',$this->campo02 ='".$this->cam02."',$this->campo03 ='".$this->cam03."' WHERE $this->idtabla1=".$this->id ;
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