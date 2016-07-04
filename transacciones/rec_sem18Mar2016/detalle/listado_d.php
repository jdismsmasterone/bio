<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido '"; }else{?>



<style>  thead {    background-color: #777;    color: white;	}	</style>

<?php

require_once 'includes.inc';

class C_Filtros extends FiltrosDatos{
	
	public function __construct() {		
		
		$campos_url			= $_POST['campos_url'];
		
		//*ini
		$this->cam01[0] 	= "idcotizacion";
		$this->cam01[1] 	= $campos_url[id];				
		$this->tabla2	 	= 'tra_irs_d';		
		$this->vistatabla	= ' Temp_'.$this->tabla2.'_'.$_SESSION['idusuario'].'_'.$_SESSION['idubicacion'];
		//*fin
		
		//$this->conlis   	 = "SELECT * FROM ".$this->vistatabla."  WHERE 1 ".$this->Filtrar();
		$this->conlis ="SELECT 
						        tb.* , cp.nombre_producto, cp.nombre_venta,cp.idcodigo, plantas*precio AS importe
						FROM
						        ".$this->vistatabla." AS tb
						        LEFT JOIN cat_productos AS cp ON tb.idproducto = cp.idproducto 
				";
		print $this->conlis;
	}
	
	
	
	
	
	
}
	
$filtro = new C_Filtros;	
	
if($filtro->Rows($filtro->conlis)<=0){		echo '<div class="well well-lg">No Existen registros <a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Nuevo registro"     onclick="FormularioDetalle()"><span class="glyphicon glyphicon-plus" aria-hidden="true" ></span></a></div>';	}
else{ 	$query =   $filtro->Consulta($filtro->conlis);
      		
?>


<div style="overflow-x:auto;">
<table class='table table-hover '>
	
	
	<thead>
		<tr>
		<td></td>
		<td colspan="3" style="text-align: center;">NOMBRES</td>		
		<td colspan="3" style="text-align: center;">PRECIO</td>
		<td colspan="2" style="text-align: center;">TIPO</td>
		<td colspan="2" style="text-align: center;">FECHA</td>
		<td colspan="4" style="text-align: center;">INCLUYE</td>
		<td colspan="1" style="text-align: center;"></td>
		<tr>
			<td>HERRAMIENTAS</td>
			<td>CODIGO    </td><td>PRODUCTO </td><td>VENTA   </td>
			<td>PLANTULAS </td><td>USD      </td><td>IMPORTE </td>
			<td>VARIEDAD  </td><td>PATRON   </td>
			<td>SIEMBRA  </td><td>EMBARQUE   </td>
			<td>M.E</td><td>K.P.</td><td>BLOCK</td><td>LOTE</td>
			<td>STATUS</td> 
		</tr>
	</thead>
	
	
		<tbody>
		<?php while ($d=mysql_fetch_array($query)) { ?>
		
			<tr class="active">
				<td>
				   <div class="btn-group" role="group" aria-label="...">				        
				  	    <a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Nuevo registro"     onclick="FormularioDetalle()"><span class="glyphicon glyphicon-plus" aria-hidden="true" ></span></a>
				  	    <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar registro"  onclick="EliminarDetalle(<?php print $d["idcotizaciondetalle"];?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>				  	    
				  	    <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar registro"    onclick="FormularioDetalle(<?php print $d["idcotizaciondetalle"];?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></a>
				   </div>  	        		    				   
			    </td>
				<td><?php print $d["idcodigo"];?></td>
				<td><?php print $d["nombre_producto"];?></td>
				<td><?php print $d["nombre_venta"];?></td>
				<td><?php print $d["plantas"];?></td>
				<td><?php print $d["precio"];?></td>
				<td><?php print $d["importe"];?></td>
				<td><?php print $d["variedad_detalle"];?></td>
				<td><?php print $d["patron_detalle"];?></td>
				<td><?php print $d["fecha_siembra"];?></td>
				<td><?php print $d["fecha_embarque"];?></td>
				<td><?php print $d["material_empaque"];?></td>
				<td><?php print $d["ikp"];?></td>
				<td><?php print $d["block"];?></td>
				<td><?php print $d["lote"];?></td>
				<td><?php print $d["status"];?></td>		
			</tr>
		
		<?php } ?>		
	</tbody>
	
	<tfoot>
	    <tr><td colspan='2'>Total de Registros: <?php print '<span class="badge">'.$nrows.'</span>'?></td><td></td></tr>
  	</tfoot>
		
	
	
</table>
</div>
<?php }?>	

	<!-- 
<script type="text/javascript" src="js/tables/fixheader.js"></script>
 -->
<script>

$(function () {	
	$('[data-toggle="tooltip"]').tooltip();
})

</script>

<?php } ?>