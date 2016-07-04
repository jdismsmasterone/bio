/**
 * 
 */

var ruta_modulo = "catalogos/tipocultivos/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idtipocultivo		= $("#idtipocultivo").val();
	var nombre_tipocultivo	= $("#nombre_tipocultivo").val();
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();
	var idorderby			= $("#idorderby").val();
	var x="";
	x = {idtipocultivo:idtipocultivo,nombre_tipocultivo:nombre_tipocultivo,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

