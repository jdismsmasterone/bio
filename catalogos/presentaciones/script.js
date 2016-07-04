/**
 * 
 */

var ruta_modulo = "catalogos/presentaciones/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idpresentacion		= $("#idpresentacion").val();
	var nombre_presentacion	= $("#nombre_presentacion").val();
	var nombre_corto		= $("#nombre_corto").val();
	var tipo_presentacion	= $("#tipo_presentacion").val();
	
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();
	var idorderby			= $("#idorderby").val();
	var x="";
	x = {idpresentacion:idpresentacion,nombre_presentacion:nombre_presentacion,nombre_corto:nombre_corto,tipo_presentacion:tipo_presentacion,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

