<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php
require_once 'includes.inc';


class class_Registro extends datosMysql {
	
	public function __construct() {
		$this->tabla_1	 		= 'tra_irs_d';		
		$this->tabla1  			= ' Temp_'.$this->tabla_1.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];	
		$this->idtabla1 		= ' idrecepciondetalle';
		$this->id				= $_POST[id];
		$this->idencabezado[0]	= ' idrecepcion';		
		$this->idencabezado[1]	= $_POST[idencabezado];
		if($_POST[idencabezado]==""){$this->idencabezado[1]	= 0;}
		$this->campo01[0] 	= ' idcasacomercial';
		$this->campo01[1] 	= $_POST[idcasacomercial];
		$this->campo02[0] 	= ' idvariedad';
		$this->campo02[1] 	= $_POST[idvariedad];
		$this->campo03[0] 	= ' idpatron';
		$this->campo03[1] 	= $_POST[idpatron];
		$this->campo04[0] 	= ' lote';
		$this->campo04[1] 	= $_POST[lote];
		$this->campo05[0] 	= ' batch';
		$this->campo05[1] 	= $_POST[batch];
		$this->campo06[0] 	= ' cantidad_sobres';
		$this->campo06[1] 	= $_POST[cantidad_sobres];
		$this->campo07[0] 	= ' presentacion';
		$this->campo07[1] 	= $_POST[presentacion];
		$this->campo08[0] 	= ' cantidad';
		$this->campo08[1] 	= $_POST[cantidad];
		$this->campo09[0] 	= ' saldo';
		$this->campo09[1] 	= $_POST[saldo];
		$this->campo10[0] 	= ' total';
		$this->campo10[1] 	= $_POST[total];
		$this->campo11[0] 	= ' porgerm';
		$this->campo11[1] 	= $_POST[porgerm];
		$this->campo12[0] 	= ' fgerm';
		$this->campo12[1] 	= $_POST[fgerm];
		
		$this->validation   = " WHERE ".$this->idtabla1." = ".$this->id;
	}
	
	
	public function ValidarCampos(){					
		$x				= "";
		if ($this->campo01[1]=="") 	    					{	$x.="| Casa Comercial |";		}
		if ($this->campo02[1]=="" AND $this->campo03[1]=="") {	$x.="| Variedad o Patron |";	}		
		if ($this->campo04[1]=="")							{	$x.="| Lote |";					}
		if ($this->campo06[1]=="")							{	$x.="| Cantidad Sobres |";		}
		if ($this->campo07[1]=="")							{	$x.="| Presentacion |";			}		
		return $x;	
	}
	
	public function InsertarDatos(){
		$sql ="INSERT INTO $this->tabla1 ( ".$this->idencabezado[0]." , ".$this->campo01[0]." , ".$this->campo02[0]." , ".$this->campo03[0]." , ".$this->campo04[0]." , ".$this->campo05[0]." , ".$this->campo06[0]." , ".$this->campo07[0]." , ".$this->campo08[0]." , ".$this->campo09[0]." , ".$this->campo10[0]." , ".$this->campo11[0]." , ".$this->campo12[0]."  )
					              VALUES ('".$this->idencabezado[1]."','".$this->campo01[1]."','".$this->campo02[1]."','".$this->campo03[1]."','".$this->campo04[1]."','".$this->campo05[1]."','".$this->campo06[1]."','".$this->campo07[1]."','".$this->campo08[1]."','".$this->campo09[1]."','".$this->campo10[1]."','".$this->campo11[1]."','".$this->campo12[1]."')";
		
		return $sql;
	}
	
	public function ActualizarDatos(){
		$sql ="UPDATE ".$this->tabla1." SET "
				.$this->campo01[0]."='".$this->campo01[1]."',"				
				.$this->campo02[0]."='".$this->campo02[1]."',"
				.$this->campo03[0]."='".$this->campo03[1]."',"
				.$this->campo04[0]."='".$this->campo04[1]."',"
				.$this->campo05[0]."='".$this->campo05[1]."',"
				.$this->campo06[0]."='".$this->campo06[1]."',"
				.$this->campo07[0]."='".$this->campo07[1]."',"
				.$this->campo08[0]."='".$this->campo08[1]."',"
				.$this->campo09[0]."='".$this->campo09[1]."',"
				.$this->campo10[0]."='".$this->campo10[1]."',"
				.$this->campo11[0]."='".$this->campo11[1]."',"
				.$this->campo12[0]."='".$this->campo12[1]."' "
				.$this->validation;
		return $sql;
	}
	
}









$c = new class_Registro;
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