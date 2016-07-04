<?php
class Conectar
{
	public static function con()
	{
		$conexion = mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("bio");
		return $conexion;
	}
}



class DC
{
	//Coneccion a la base de datos............................................................................................................
	var $host='localhost', $user='root', $pass='', $db='bio', $i_Servidor='No se conecto con el Servidor', $i_DB='No se selecciono la DB';
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
