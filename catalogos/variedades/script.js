/**
 * 
 */

var ruta_modulo = "catalogos/variedades/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idvariedad			= $("#idvariedad").val();
	var nombre_variedad		= $("#nombre_variedad").val();
	var idcultivo			= $("#idcultivo").val();
	var porcentaje_aumento	= $("#porcentaje_aumento").val();
	
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();
	var idorderby			= $("#idorderby").val();
	var x="";
	x = {idvariedad:idvariedad,nombre_variedad:nombre_variedad,idcultivo:idcultivo,porcentaje_aumento:porcentaje_aumento,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

