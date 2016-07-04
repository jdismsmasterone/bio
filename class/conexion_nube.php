<?php
class Conectar
{
	public static function con()
	{
		$conexion = mysql_connect("localhost","redsun1_bioUS","b.J&W$9LI*-]");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("redsun1_bio");
		return $conexion;
	}
}



class DC
{
	//Coneccion a la base de datos............................................................................................................
	var $host='localhost', $user='redsun1_bioUS', $pass='b.J&W$9LI*-]', $db='redsun1_bio', $i_Servidor='No se conecto con el Servidor', $i_DB='No se selecciono la DB';
	function ConexDb()
	  { 
	    if (!@mysql_connect($this->host,$this->user,$this->pass))
		   {
			 print $this->i_Servidor;		
		   }
		else 
		   {
		     if (!@mysql_select_db($this->db))
			    {
				   print $this->i_DB;
			    }
		   }
	   }
}
?>
