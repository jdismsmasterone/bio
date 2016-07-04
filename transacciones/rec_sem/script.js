/**
 * 
 */

var ruta_modulo = "transacciones/rec_sem/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idcliente			= $("#idcliente").val();
	var idrecepcion			= $("#idrecepcion").val();
	var fecha				= $("#fecha").val();
	var entrego				= $("#entrego").val();
	var recibio				= $("#recibio").val();
	
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();	
	var idorderby			= $("#idorderby").val();	
	var x="";
	x = {idcliente:idcliente,idrecepcion:idrecepcion,fecha:fecha,entrego:entrego,recibio:recibio,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

