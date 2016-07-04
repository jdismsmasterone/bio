<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido '"; }else{?>



<style>  thead {    background-color: #777;    color: white;	}	</style>

<?php

require_once 'includes.inc';
$c=new class_Registro; $c->CrearTablaTemp();


class C_Filtros extends FiltrosDatos{
	
	public function __construct() {		
		
		$campos_url			= $_POST['campos_url'];
		
		//*ini
		$this->tabla2	 	= 'tra_irs_d';
		$this->tabla2tmp  	= ' Temp_'.$this->tabla2.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];
		$this->cam01[0] 	= "idrecepcion";
		$this->cam01[1] 	= $campos_url[idrecepcion];		
		$this->cam02[0]		= "fecha";
		$this->cam02[1]		= $campos_url[fecha];
		$this->cam03[0]		= "idcliente";
		$this->cam03[1]		= $campos_url[idcliente];
		$this->cam04[0]		= "entrego";
		$this->cam04[1]		= $campos_url[entrego];
		$this->cam05[0]		= "recibio";
		$this->cam05[1]		= $campos_url[recibio];
		$this->vistatabla   = " vw_tra_irs_a ";
		//*fin
		
		$this->cam100[1]   	 = $campos_url[idorderby];		$this->cam101[1]   	 = $campos_url[idsql_orden];		$this->cam102[1]   	 = $campos_url[idsql_nregistros];		$this->sqlorden      = "SELECT nombre FROM sql_orden         WHERE idsql_orden		='".$this->cam101[1]."'"; $this->sqlnregistros = "SELECT f  FROM vw_sql_nregistros     WHERE idsql_nregistros	='".$this->cam102[1]."'";	$this->conlis   	 = "SELECT * FROM ".$this->vistatabla."  WHERE 1 ".$this->Filtrar();
		
	}
	
	public function filtros_amodificar() {		
		
		//*ini
		if($this->cam01[1]!=""){       	$filtro .=	" AND ".$this->cam01[0]."='".$this->cam01[1]."'";			}
		if($this->cam02[1]!=""){ 		$filtro .=  " AND ".$this->cam02[0]."='".$this->cam02[1]."'";	        }
		if($this->cam03[1]!=""){   		$filtro .=  " AND ".$this->cam03[0]."='".$this->cam03[1]."'";			}
		if($this->cam04[1]!=""){   		$filtro .=  " AND ".$this->cam04[0]."='".$this->cam04[1]."'";		    }
		if($this->cam05[1]!=""){   		$filtro .=  " AND ".$this->cam05[0]."='".$this->cam05[1]."'";		    }
		//fin
		
		
		return  $filtro;
		
	}
	
	
	
	
}
	
$filtro = new C_Filtros;	
	
if($filtro->Rows()<=0){		echo '<div class="well well-lg">No Existen registros</div>';	}
else{ 	$query =   $filtro->Consulta($filtro->conlis);
      		
?>


<div style="overflow-x:auto;">
<table class='table table-hover fixed'>
	
	
	<thead>
		<tr><td>HERRAMIENTAS</td><td>FOLIO</td><td>CLIENTE</td><td>FECHA</td><td>ENTREGO</td><td>RECIBIO</td></tr>
	</thead>
	
	
		<tbody>
		<?php while ($d=mysql_fetch_array($query)) { ?>
		
			<tr class="active">
				<td>
				   <div class="btn-group" role="group" aria-label="...">				        
				  	    <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar registro"  onclick="Eliminar(<?php print $d["idrecepcion"];?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>
				  	    <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar registro"  onclick="Formulario(<?php print $d["idrecepcion"];?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></a>
				   </div>  	        		    				   
			    </td>
				<td><?php print $d["idrecepcion"];?></td>
				<td><?php print $d["nombre"];?></td>
				<td><?php print $d["fecha"];?></td>
				<td><?php print $d["entrego"];?></td>
				<td><?php print $d["recibio"];?></td>				
			</tr>
		
		<?php } ?>		
	</tbody>
	
	<tfoot>
	    <tr><td colspan='2'>Total de Registros: <?php print '<span class="badge">'.$nrows.'</span>'?></td><td></td></tr>
  	</tfoot>
		
	
	
</table>
</div>
<?php }?>	

	
<script type="text/javascript" src="js/tables/fixheader.js"></script>

<script>

$(function () {	
	$('[data-toggle="tooltip"]').tooltip();
})

</script>

<?php } ?>