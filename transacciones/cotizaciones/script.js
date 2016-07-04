/**
 * 
 */

var ruta_modulo = "transacciones/cotizaciones/";


 
$(function () {
	$("#bloquea").hide();	
})




function ValoresFiltros(){
	var idcotizacion		= $("#idcotizacion").val();
	var idcliente			= $("#idcliente").val();	
	var idusuario			= $("#idusuario").val();
	var fecha				= $("#fecha").val();
	var nombre_mostrador	= $("#nombre_mostrador").val();
	var domicilio			= $("#domicilio").val();
	var observaciones		= $("#observaciones").val();
	
	var idsql_orden			= $("#idsql_orden").val(); 
	var idsql_nregistros	= $("#idsql_nregistros").val();	
	var idorderby			= $("#idorderby").val();	
	var x="";
	x = {idcotizacion:idcotizacion,idcliente:idcliente,idusuario:idusuario,fecha:fecha,nombre_mostrador:nombre_mostrador,domicilio:domicilio,observaciones:observaciones,idsql_orden:idsql_orden,idsql_nregistros:idsql_nregistros,idorderby:idorderby};
	return x;
	
}

