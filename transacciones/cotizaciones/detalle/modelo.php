<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php
require_once 'includes.inc';


class class_Registro extends datosMysql {
	
	public function __construct() {
		$this->tabla_1	 		= 'tra_cot_d';		
		$this->tabla1  			= ' Temp_'.$this->tabla_1.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];	
		$this->idtabla1 		= ' idcotizaciondetalle';
		$this->id				= $_POST[id];
		$this->idencabezado[0]	= ' idcotizacion';
		$this->idencabezado[1]	= $_POST[idencabezado];
		
		$this->campo01[0] 	= ' idproducto';
		$this->campo01[1] 	= $_POST[idproducto];
		$this->campo02[0] 	= ' plantas';
		$this->campo02[1] 	= $_POST[plantas];
		$this->campo03[0] 	= ' lote';
		$this->campo03[1] 	= $_POST[lote];
		$this->campo04[0] 	= ' precio';
		$this->campo04[1] 	= $_POST[precio];
		$this->campo05[0] 	= ' variedad_detalle';
		$this->campo05[1] 	= $_POST[variedad_detalle];
		$this->campo06[0] 	= ' patron_detalle';
		$this->campo06[1] 	= $_POST[patron_detalle];
		$this->campo07[0] 	= ' fecha_siembra';
		$this->campo07[1] 	= $_POST[fecha_siembra];
		$this->campo08[0] 	= ' fecha_embarque';
		$this->campo08[1] 	= $_POST[fecha_embarque];
		$this->campo09[0] 	= ' material_empaque';
		$this->campo09[1] 	= $_POST[material_empaque];
		$this->campo10[0] 	= ' ikp';
		$this->campo10[1] 	= $_POST[ikp];
		$this->campo11[0] 	= ' block';
		$this->campo11[1] 	= $_POST[block];
		$this->campo12[0] 	= ' status';
		$this->campo12[1] 	= $_POST[status];
		
		$this->validation   = " WHERE ".$this->idtabla1." = ".$this->id;
	}
	
	
	public function ValidarCampos(){					
		$x				= "";
		if ($this->campo01[1]=="") 	    					{	$x.="| Producto |";			}
		if ($this->campo02[1]=="" AND $this->campo03[1]=="") {	$x.="| Plantas |";			}		
		if ($this->campo04[1]=="")							{	$x.="| Precio |";			}
		if ($this->campo07[1]=="")							{	$x.="| Fecha Siembra |";	}
		if ($this->campo08[1]=="")							{	$x.="| Fecha Embarque |";	}		
		return $x;	
	}
	
	public function InsertarDatos(){
		$sql ="INSERT INTO $this->tabla1 ( ".$this->idencabezado[0]." , ".$this->campo01[0]." , ".$this->campo02[0]." , ".$this->campo03[0]." , ".$this->campo04[0]." , ".$this->campo05[0]." , ".$this->campo06[0]." , ".$this->campo07[0]." , ".$this->campo08[0]." , ".$this->campo09[0]." , ".$this->campo10[0]." , ".$this->campo11[0]." , ".$this->campo12[0]."  )
					              VALUES ('".$this->idencabezado[1]."','".$this->campo01[1]."','".$this->campo02[1]."','".$this->campo03[1]."','".$this->campo04[1]."','".$this->campo05[1]."','".$this->campo06[1]."','".$this->campo07[1]."','".$this->campo08[1]."','".$this->campo09[1]."','".$this->campo10[1]."','".$this->campo11[1]."','".$this->campo12[1]."')";
		//print $sql;
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
		//print $sql;
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