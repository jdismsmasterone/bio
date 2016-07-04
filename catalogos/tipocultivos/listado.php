<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{?>
<style>
thead {
    background-color: #777;
    color: white;
}
</style>
<?php 
	require_once 'includes.inc';
	$datosmysql = new datosMysql; 	
	$campos_url 		= 	$_POST['campos_url'];	//print_r($campos_url);
	$orden	         	=   $datosmysql->datosArray("SELECT nombre FROM sql_orden      WHERE idsql_orden=".$campos_url[idsql_orden]);                    $orden			=	$orden[nombre];
	$nregistros        	=   $datosmysql->datosArray("SELECT final  FROM sql_nregistros WHERE idsql_nregistros=".$campos_url[idsql_nregistros]);          $nregistros	=   $nregistros['final'];
	
	
	
	
	
	   	
    //---------------------------------------------------------------------------------------------------------------------------
	//-----------------------------------------------------------------------------------------------------------------------------
	
    if($campos_url['idtipocultivo']!=""){       $filtro  =	" AND idtipocultivo='".$campos_url['idtipocultivo']."'"; 				}
	
    
    
    //-----------------------------------------------------------------------------------------------------------------------------
    //-----------------------------------------------------------------------------------------------------------------------------
    
    
    
    
    
    
    if($orden!=""){       $filtro .= 	" ORDER BY nombre_tipocultivo ".$orden;	}
	if($nregistros!=""){  $filtro .= 	" LIMIT ".$nregistros;				}
	
?>   
    
<?php 
	$nrows      		=   $datosmysql->totalRows("SELECT * FROM cat_tipocultivo WHERE 1".$filtro);       	
	if($nrows<=0){		echo '<div class="well well-lg">No Existen registros</div>';		}	
    else{
      		$query =   $datosmysql->Query("SELECT * FROM cat_tipocultivo WHERE 1".$filtro); 
?>


<div style="overflow-x:auto;">
<table class='table table-hover fixed'>
	
	
	<thead>
		<tr><td>HERRAMIENTAS</td><td>ID</td><td>NOMBRE TIPO CULTIVO</td></tr>
	</thead>
	
	
	<tfoot>
	    <tr><td colspan='2'>Total de Registros: <?php print '<span class="badge">'.$nrows.'</span>'?></td><td></td></tr>
  	</tfoot>
	
	
	<tbody>
		<?php while ($d=mysql_fetch_array($query)) { ?>
		
			<tr class="active">
				<td>
				   <div class="btn-group" role="group" aria-label="...">				        
				  	    <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar registro"  onclick="Eliminar(<?php print $d["idtipocultivo"];?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>
				  	    <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar registro"  onclick="Formulario(<?php print $d["idtipocultivo"];?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></a>
				   </div>  	        		    				   
			    </td>
				<td ><?php print $d["idtipocultivo"];?></td>
				<td><?php print $d["nombre_tipocultivo"];?></td>
			</tr>
		
		<?php } ?>		
	</tbody>
	
	
	
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