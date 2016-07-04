/**
 * 
 */

var ruta_modulo = "catalogos/cultivos/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idcultivo			= $("#idcultivo").val();
	var nombre_cultivo		= $("#nombre_cultivo").val();
	var inicial				= $("#inicial").val();
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();
	var idorderby			= $("#idorderby").val();
	var x="";
	x = {idcultivo:idcultivo,nombre_cultivo:nombre_cultivo,inicial:inicial,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

