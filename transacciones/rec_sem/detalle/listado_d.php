<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido '"; }else{?>



<style>  thead {    background-color: #777;    color: white;	}	</style>

<?php

require_once 'includes.inc';

class C_Filtros extends FiltrosDatos{
	
	public function __construct() {		
		
		$campos_url			= $_POST['campos_url'];
		
		//*ini
		$this->cam01[0] 	= "idrecepcion";
		$this->cam01[1] 	= $campos_url[id];				
		$this->tabla2	 	= 'tra_irs_d';		
		$this->vistatabla	= ' Temp_'.$this->tabla2.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];
		//*fin
		
		//$this->conlis   	 = "SELECT * FROM ".$this->vistatabla."  WHERE 1 ".$this->Filtrar();
		$this->conlis ="SELECT 
						       tb.*,
						        ccc.nombre_casa_comercial AS nombre_casa_comercial,
						        cv.nombre_variedad AS nombre_variedad,
						        cpa.nombre_patron AS nombre_patron
						FROM
						        ".$this->vistatabla." tb
						        LEFT JOIN cat_casa_comercial ccc ON tb.idcasacomercial = ccc.idcasacomercial
						        LEFT JOIN cat_variedades cv ON tb.idvariedad = cv.idvariedad
						        LEFT JOIN cat_patron cpa ON tb.idpatron = cpa.idpatron
				";
		//print $this->conlis;
	}
	
	public function filtros_amodificar() {		
		
		//*ini
		if($this->cam01[1]!=""){       	$filtro .=	" AND ".$this->cam01[0]."='".$this->cam01[1]."'";			}		
		//fin
		
		
		return  $filtro;
		
	}
	
	
	
	
}
	
$filtro = new C_Filtros;	
	
if($filtro->Rows($filtro->conlis)<=0){		echo '<div class="well well-lg">No Existen registros <a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Nuevo registro"     onclick="FormularioDetalle()"><span class="glyphicon glyphicon-plus" aria-hidden="true" ></span></a></div>';	}
else{ 	$query =   $filtro->Consulta($filtro->conlis);
      		
?>


<h3 style="padding-left: 10px;">Listado Detalle</h3>
<table class='table table-hover fixed'>
	
	
	<thead>
		<tr><td>HERRAMIENTAS</td><td>CASA COMERCIAL</td><td>VARIEDAD</td><td>PATRON</td><td>SOBRES</td><td>PRESENTACION</td><td>TOTAL</td></tr>
	</thead>
	
	
		<tbody>
		<?php while ($d=mysql_fetch_array($query)) { ?>
		
			<tr class="active">
				<td>
				   <div class="btn-group" role="group" aria-label="...">				        
				  	    <a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Nuevo registro"     onclick="FormularioDetalle()"><span class="glyphicon glyphicon-plus" aria-hidden="true" ></span></a>
				  	    <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar registro"  onclick="EliminarDetalle(<?php print $d[idrecepciondetalle];?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>				  	    
				  	    <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar registro"    onclick="FormularioDetalle(<?php print $d[idrecepciondetalle];?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></a>
				   </div>  	        		    				   
			    </td>
				<td><?php print $d["nombre_casa_comercial"];?></td>
				<td><?php print $d["nombre_variedad"];?></td>
				<td><?php print $d["nombre_patron"];?></td>
				<td><?php print $d["cantidad_sobres"];?></td>
				<td><?php print $d["presentacion"];?></td>
				<td><?php print $d["total"];?></td>		
			</tr>
		
		<?php } ?>		
	</tbody>
	
	<tfoot>
	  
  	</tfoot>
		
	
	
</table>

<?php }?>	


<script type="text/javascript" src="js/tables/fixheader.js"></script>

<script>

$(function () {	
	$('[data-toggle="tooltip"]').tooltip();
})

</script>

<?php } ?>