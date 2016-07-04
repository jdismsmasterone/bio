/**
 * 
 */

var ruta_modulo = "catalogos/usuarios/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idrecepcion			= $("#idrecepcion").val();
	var fecha				= $("#fecha").val();
	var idcliente			= $("#idcliente").val();
	var entrego				= $("#entrego").val();
	var recibio				= $("#recibio").val();
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();
	var idorderby			= $("#idorderby").val();
	var x="";
	x = {idrecepcion:idrecepcion,fecha:fecha,idcliente:idcliente,entrego:entrego,recibio:recibio,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

