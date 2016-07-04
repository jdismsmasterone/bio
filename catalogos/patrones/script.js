/**
 * 
 */

var ruta_modulo = "catalogos/patrones/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idpatron			= $("#idpatron").val();
	var nombre_patron		= $("#nombre_patron").val();
	var idcultivo			= $("#idcultivo").val();
	var porcentaje_aumento	= $("#porcentaje_aumento").val();
	
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();
	var idorderby			= $("#idorderby").val();
	var x="";
	x = {idpatron:idpatron,nombre_patron:nombre_patron,idcultivo:idcultivo,porcentaje_aumento:porcentaje_aumento,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

