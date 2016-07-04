/**
 * 
 */

var ruta_modulo = "catalogos/procesos/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idproceso		= $("#idproceso").val();
	var nombre_proceso	= $("#nombre_proceso").val();
	var idprioridad		= $("#idprioridad").val();	
	
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();
	var idorderby			= $("#idorderby").val();
	var x="";
	x = {idproceso:idproceso,nombre_proceso:nombre_proceso,idprioridad:idprioridad,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

