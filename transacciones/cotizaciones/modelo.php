<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?><?php
require_once 'includes.inc';


class class_Registro extends datosMysql {
	
	public function __construct() {
		$this->tabla2	 	= 'tra_cot_d';
		$this->tabla2tmp  	= 'Temp_'.$this->tabla2.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];
		$this->idtabla2 	= 'idcotizaciondetalle';
		$this->tabla1  		= 'tra_cot_a';		
		$this->idtabla1 	= 'idcotizacion';
		$this->id 			= $_POST[id];
		$this->campo01[0] 	= 'idcliente';
		$this->campo01[1] 	= $_POST[idcliente];
		$this->campo02[0] 	= 'fecha';
		$this->campo02[1] 	= $_POST[fecha];
		$this->campo03[0] 	= 'nombre_mostrador';
		$this->campo03[1] 	= $_POST[nombre_mostrador];
		$this->campo04[0] 	= 'domicilio';
		$this->campo04[1] 	= $_POST[domicilio];
		$this->campo05[0] 	= 'observaciones';
		$this->campo05[1] 	= $_POST[observaciones];
		$this->validation   = " WHERE ".$this->idtabla1." = ".$this->id;
		$this->tform        = "encabezadodetalle";
		
		/*DETALLE TEMPPP */
		$this->campod01[0] 	= 'idproducto';
		$this->campod02[0] 	= 'plantas';
		$this->campod03[0] 	= 'lote';
		$this->campod04[0] 	= 'precio';
		$this->campod05[0] 	= 'variedad_detalle';
		$this->campod06[0] 	= 'patron_detalle';
		$this->campod07[0] 	= 'fecha_siembra';
		$this->campod08[0] 	= 'fecha_embarque';
		$this->campod09[0] 	= 'material_empaque';		
		$this->campod10[0] 	= 'ikp';		
		$this->campod11[0] 	= 'block';		
		$this->campod12[0] 	= 'status';		
		/*---------------*/
		
	//	print $this->UpdateDatosTTaTO();
	}
	
	
	public function ValidarCampos(){					
		$x					= "";
		if ($this->campo01[1]=="") 	    {	$x.="| Cliente |";		}
		if ($this->campo01[1]=="133") 	{	
			if ($this->campo03[1]=="") 	    {	$x.="| Nombre Mostrador |";		}
			if ($this->campo04[1]=="") 	    {	$x.="| Domicilio |";		    }
		}
		
		return $x;	
	}
	
	public function InsertarDatos(){
		$sql ="INSERT INTO $this->tabla1 ( ".$this->campo01[0]." , ".$this->campo02[0]." , ".$this->campo03[0]." , ".$this->campo04[0]." , ".$this->campo05[0]."  )
					              VALUES ('".$this->campo01[1]."','".$this->campo02[1]."','".$this->campo03[1]."','".$this->campo04[1]."','".$this->campo05[1]."')";
		return $sql;
	}
	
	public function ActualizarDatos(){
		$sql ="UPDATE ".$this->tabla1." SET "
				.$this->campo01[0]."='".$this->campo01[1]."',"				
				.$this->campo03[0]."='".$this->campo03[1]."',"
				.$this->campo04[0]."='".$this->campo04[1]."',"
				.$this->campo05[0]."='".$this->campo05[1]."' "
				.$this->validation;
		return $sql;
	}
	
	public function UpdateDatosTTaTO(){
		 
		$sql =	"
		UPDATE ".$this->tabla2." INNER JOIN  ".$this->tabla2tmp." ON (  ".$this->tabla2.".".$this->idtabla2."=".$this->tabla2tmp.".".$this->idtabla2.") SET ".
		$this->tabla2.".".$this->idtabla2 	 ."=". $this->tabla2tmp.".".$this->idtabla2.",".
		$this->tabla2.".".$this->campod01[0] ."=". $this->tabla2tmp.".".$this->campod01[0].",".
		$this->tabla2.".".$this->campod02[0] ."=". $this->tabla2tmp.".".$this->campod02[0].",".
		$this->tabla2.".".$this->campod03[0] ."=". $this->tabla2tmp.".".$this->campod03[0].",".
		$this->tabla2.".".$this->campod04[0] ."=". $this->tabla2tmp.".".$this->campod04[0].",".
		$this->tabla2.".".$this->campod05[0] ."=". $this->tabla2tmp.".".$this->campod05[0].",".
		$this->tabla2.".".$this->campod06[0] ."=". $this->tabla2tmp.".".$this->campod06[0].",".
		$this->tabla2.".".$this->campod07[0] ."=". $this->tabla2tmp.".".$this->campod07[0].",".
		$this->tabla2.".".$this->campod08[0] ."=". $this->tabla2tmp.".".$this->campod08[0].",".
		$this->tabla2.".".$this->campod09[0] ."=". $this->tabla2tmp.".".$this->campod09[0].",".
		$this->tabla2.".".$this->campod10[0] ."=". $this->tabla2tmp.".".$this->campod10[0].",".
		$this->tabla2.".".$this->campod11[0] ."=". $this->tabla2tmp.".".$this->campod11[0].",".
		$this->tabla2.".".$this->campod12[0] ."=". $this->tabla2tmp.".".$this->campod12[0]
		;
		
		return $sql;
	}
	
	public function DeleteDatosTTaTO(){
		$sql =" DELETE $this->tabla2  FROM  $this->tabla2 LEFT JOIN  $this->tabla2tmp ON  $this->tabla2.$this->idtabla2=$this->tabla2tmp.$this->idtabla2
		WHERE  $this->tabla2.$this->idtabla1=$this->id AND  $this->tabla2tmp.$this->idtabla2 IS NULL";
		return $sql;
	}
	
	public function InsertDatosTTaTO_UPDATE(){
		$sql ="INSERT INTO ".$this->tabla2." (".$this->idtabla1.",".$this->campod01[0].",".$this->campod02[0].",".$this->campod03[0].",".$this->campod04[0].",".$this->campod05[0].",".$this->campod06[0].",".$this->campod07[0].",".$this->campod08[0].",".$this->campod09[0].",".$this->campod10[0].",".$this->campod11[0].",".$this->campod12[0].")
    			                       SELECT ".$this->idtabla1.",".$this->campod01[0].",".$this->campod02[0].",".$this->campod03[0].",".$this->campod04[0].",".$this->campod05[0].",".$this->campod06[0].",".$this->campod07[0].",".$this->campod08[0].",".$this->campod09[0].",".$this->campod10[0].",".$this->campod11[0].",".$this->campod12[0]."
    		    FROM  ".$this->tabla2tmp." WHERE ".$this->tabla2tmp.".".$this->idtabla2." NOT IN(SELECT ".$this->idtabla2." FROM ".$this->tabla2." WHERE ".$this->idtabla1."='".$this->id."')";
		//print $sql;
		return $sql;
	}
	
	public function InsertDatosTTaTO_INSERT(){
		
		
		$sql ="INSERT INTO ".$this->tabla2." (".$this->idtabla1.",".$this->campod01[0].",".$this->campod02[0].",".$this->campod03[0].",".$this->campod04[0].",".$this->campod05[0].",".$this->campod06[0].",".$this->campod07[0].",".$this->campod08[0].",".$this->campod09[0].",".$this->campod10[0].",".$this->campod11[0].",".$this->campod12[0].")
    			                       SELECT ".$this->idtabla1.",".$this->campod01[0].",".$this->campod02[0].",".$this->campod03[0].",".$this->campod04[0].",".$this->campod05[0].",".$this->campod06[0].",".$this->campod07[0].",".$this->campod08[0].",".$this->campod09[0].",".$this->campod10[0].",".$this->campod11[0].",".$this->campod12[0]."
    		    FROM  ".$this->tabla2tmp;
		
		
		
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