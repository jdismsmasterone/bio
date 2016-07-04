<?php 

class class_Queries{
    
    protected   $consulta        =   0;    
    
    private function Queries(){ 
        return mysql_query($this->consulta);       
    }

    protected function ObtenerDatosQuery(){
        return mysql_fetch_array($this->Queries());
    }

    protected function sumarRegQuery(){
    	return mysql_num_rows($this->Queries());
    }
    /*public function datosArray($consulta){  $this->consulta   =   $consulta;  return $this->ObtenerDatosQuery(); }   public function totalRows($consulta){   $this->consulta   =   $consulta;  return class_Queries::sumarRegQuery();   }*/ 
    
}

class datosMysql extends class_Queries {
    
    public function datosArray($consulta){               
        $this->consulta   =   $consulta;     
        return $this->ObtenerDatosQuery();        
    }
    
    public function totalRows($consulta){
        $this->consulta   =   $consulta;     
        return $this->sumarRegQuery();
    } 

    public function Query($consulta) {
    	$this->consulta   =   $consulta;
    	return mysql_query($this->consulta);
    }

    public function Query_vLID($consulta) {
    	$this->consulta   =   $consulta;
    	mysql_query($this->consulta);
    	$vLID  = mysql_fetch_assoc(mysql_query("SELECT LAST_INSERT_ID() AS vLID"));
    	$vLID  = $vLID[vLID];   
    	
    	return $vLID;
    }
    
public function Guardar() {    	
   $validacioncorrecta	=	$this->ValidarCampos();
   if($validacioncorrecta==""):
   		
	   switch ($_POST['solicitud']) {
   	
	   		case $this->id=="" AND $this->tform=='encabezadodetalle':
	   			$this->Guarda_Nuevo_encabezadodetalle();	    		
	    		break;
	    	
	    	case $this->id=="" AND (is_null($this->tform) || $this->tform=='' ):
	    		$this->Query($this->InsertarDatos());
	    		break;
	    	
	    	case $this->id!="" AND $this->tform=='encabezadodetalle':
	    		$this->Guarda_Editar_encabezadodetalle();
	    		break;
	    	
    		case $this->id!=""  AND (is_null($this->tform) || $this->tform=='' ):
    			$this->Query($this->ActualizarDatos());
    			break;
	    		
	    }
	    print 1;
    else:
    	print $validacioncorrecta;
    endif;
    	
}
    
    
    public function Guarda_Nuevo_encabezadodetalle(){    	
    	$vLID 				= 	$this->Query_vLID($this->InsertarDatos());                                         		//Insertaencabezadodeuelve_vLID
    	$sql  				= 	"UPDATE ".$this->tabla2tmp." SET ".$this->idtabla1."=".$vLID;    
    	$this->Query(	$sql	);																								//Actualiza el idencabezado en latabladetalletemporal
    	$this->Query(	$this->InsertDatosTTaTO_INSERT()	);                                         //Pasa los datos de la tabla temporal a la original
    	$this->TruncarTabla();
    }
    
    public function Guarda_Editar_encabezadodetalle(){
    	$this->Query(	$this->UpdateDatosTTaTO()			);				    					   //Actualiza los datos modi en  ori que fueron modi en la temp
    	$this->Query(	$this->DeleteDatosTTaTO()			);				    					   //Borra los datos en la ori q fueron borrados en la temp
    	$this->Query(	$this->InsertDatosTTaTO_UPDATE()	);									   //Inserto los datos nuevos en el detalle
    	$this->Query($this->ActualizarDatos());
    	$this->TruncarTabla();
    }
    
    public function Eliminar() {	$sql	= "DELETE FROM ".$this->tabla1." ".$this->validation; 		$this->Query($sql);		}
   
    public function CrearTablaTemp() {
    	$this->BorrarTabla();
    	$consulta="CREATE TABLE IF NOT EXISTS ".$this->tabla2tmp. " LIKE ".$this->tabla2;
    	$this->Query(	$consulta	);
    	$this->TruncarTabla();
    }
   
    public function CopiarDatosATablaTemp($id){
    	$this->TruncarTabla();
    	$consulta = "INSERT INTO ".$this->tabla2tmp." SELECT * FROM ".$this->tabla2." ".$this->validation. $id;
    	$this->Query(	$consulta	);
    }
    
    public function BorrarTabla() {
    	$consulta = "DROP TABLE IF exists ".$this->tabla2tmp;
    	$this->Query(	$consulta	);
    }
    
    public function TruncarTabla() {
    	$consulta = "TRUNCATE TABLE ".$this->tabla2tmp;
    	$this->Query(	$consulta	);
    }
    
    
    
}



class FiltrosDatos extends datosMysql{
	
	public function Filtrar() {
		return $this->filtros_amodificar()."".$this->filtros_definidos();
	}
	
	public function Rows(){
		return $this->totalRows($this->conlis);
	}
	
	public function Consulta($consulta){
		return $this->Query($consulta);
	}
	
	public function ExtraerDatos($consulta){
		return $this->datosArray($consulta);
	}
	
	public function filtros_definidos(){
	
		$orden	         	=   $this->datosArray($this->sqlorden);     	$orden			=	$orden[nombre];
		$nregistros        	=   $this->datosArray($this->sqlnregistros);  	$nregistros		=	$nregistros[f];
		if($this->cam100[1]!=""){ 			$filtro  =" ORDER BY ".$this->cam100[1]." ".$orden; 	}
		if($this->sqlnregistros!=""){  		$filtro .= 	" LIMIT ".$nregistros;						}
	
		return $filtro;
	}
	
}

class Filtro_deCampos{

	public function ObtenerCampos($idindex,$nom_tabla,$nom_cfiltro){

		$d            = mysql_fetch_row( mysql_query("SELECT * FROM $nom_tabla WHERE $nom_cfiltro=$idindex") );
		$qColumnNames = mysql_query("SHOW COLUMNS FROM $nom_tabla");
		$numColumns   = mysql_num_rows($qColumnNames);
		$x            = 0;
		 
		while ($x < $numColumns){ $colname = mysql_fetch_row($qColumnNames); $col[$colname[0]] = $d[$x]; $x++;       }
		//print $col[identradas];//de esta forma se imprime el valor de la columna;                //print_r($col); //imprime el array;
		return $col;
		 
	}

	

}



?>