<?php 

$Arrfiltro_idrecepcion = array(
		"nom"=>"idrecepcion",
		"value"=>$id,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Folio de Rcepci&oacute;n"',
		"etiqueta"=>"Folio:",
		"permisos"=>' '
);


$Arrfiltro_fecha = array(
		"nom"=>"fecha",
		"value"=>$fecha,
		"clases"=>"  form-control datepicker",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Fecha"',
		"etiqueta"=>"Fecha:",
		"permisos"=>" "
);


$Arr_clientes= array(
		"nom_id1"=>"idcliente",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre",
		"seleccionar"=>$idcliente,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idcliente, nombre FROM ccli_clientes;",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Usuarios"',
		"etiqueta"=>"Cliente:",
		"permisos"=>''
);

$Arr_idrecepcion = array(
		"nom"=>"idrecepcion",
		"value"=>$id,
		"clases"=>"  form-control cencabezado",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Folio de Rcepci&oacute;n"',
		"etiqueta"=>"Folio:",
		"permisos"=>' readonly'
);


$Arr_fecha = array(
		"nom"=>"fecha",
		"value"=>$fecha,
		"clases"=>"  form-control ",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Fecha"',
		"etiqueta"=>"Fecha:",
		"permisos"=>" readonly"
);

$Arr_entrego = array(
		"nom"=>"entrego",
		"value"=>$entrego,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Entrego"',
		"etiqueta"=>"Entrego:",
		"permisos"=> " "
);

$Arr_recibio = array(
		"nom"=>"recibio",
		"value"=>$recibio,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Recibio"',
		"etiqueta"=>"Recibio:",
		"permisos"=>" "
);

$Arr_OrdenarPor  = array(		
		"nom_id1"=>"idorderby",
		"nom_id2"=>"",
		"nom_mostrar"=>"",
		"seleccionar"=>"",
		"clases"=>" chosen form-control",
		"consulta"=>"",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Ordenar Datos Por"',
		"etiqueta"=>"Ordenar Datos Por:",
		"options"=>"
					<option value ='$Arr_idrecepcion[nom]'>FOLIO</option>
					<option value ='$Arr_clientes[nom_id1]'>CLIENTES</option>
					<option value ='$Arr_fecha[nom]'>FECHA</option>
					<option value ='$Arr_entrego[nom]'>ENTREGO</option>
					<option value ='$Arr_recibio[nom]'>RECIBIO</option>
		",
		"permisos"=>""
);





//------det------------------------------------------------------------------------------------------------------
$Arr_idrecepciondetalle = array(
		"nom"=>"id",
		"value"=>$idrecepciondetalle,
		"clases"=>"  ",
		"tooltip"=>'',
		"etiqueta"=>"",
		"permisos"=>" readonly style='    visibility: hidden; '"
);

$Arr_casacomercial= array(
		"nom_id1"=>"idcasacomercial",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_casa_comercial",
		"seleccionar"=>$idcasacomercial,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idcasacomercial, nombre_casa_comercial FROM cat_casa_comercial;",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Casa Comercial"',
		"etiqueta"=>"Casa Comercial:",
		"permisos"=>" "
);

$Arr_variedades= array(
		"nom_id1"=>"idvariedad",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_variedad",
		"seleccionar"=>$idvariedad,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idvariedad, nombre_variedad FROM cat_variedades;",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Variedades"',
		"etiqueta"=>"Variedades:",
		"permisos"=>" "
);

$Arr_patrones= array(
		"nom_id1"=>"idpatron",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_patron",
		"seleccionar"=>$idpatron,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idpatron, nombre_patron FROM cat_patron;",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Patrones"',
		"etiqueta"=>"Patrones:",
		"permisos"=>" "
);


$Arr_lote = array(
		"nom"=>"lote",
		"value"=>$lote,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Lote"',
		"etiqueta"=>"Lote:",
		"permisos"=>" "
);

$Arr_batch = array(
		"nom"=>"batch",
		"value"=>$batch,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Batch"',
		"etiqueta"=>"Batch:",
		"permisos"=>" "
);

//numerosobres
$Arr_cantsobres = array(
		"nom"=>"cantidad_sobres",
		"value"=>$cantidad_sobres,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Cantidad Sobres"',
		"etiqueta"=>"Cantidad Sobres:",
		"permisos"=>" "
);

//semillasxsobre
$Arr_presentacion = array(
		"nom"=>"presentacion",
		"value"=>$presentacion,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Presentaci&oacute;n"',
		"etiqueta"=>"Presentaci&oacute;n:",
		"permisos"=>" "
);

$Arr_cantidad = array(
		"nom"=>"cantidad",
		"value"=>$cantidad,
		"clases"=>"  form-control datepicker",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Cantidad"',
		"etiqueta"=>"Cantidad:",
		"permisos"=>" "
);

$Arr_saldo = array(
		"nom"=>"saldo",
		"value"=>$saldo,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Saldo"',
		"etiqueta"=>"Saldo:",
		"permisos"=>" "
);

$Arr_total = array(
		"nom"=>"total",
		"value"=>$total,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Total"',
		"etiqueta"=>"Total:",
		"permisos"=>" readonly"
);

$Arr_porgerm = array(
		"nom"=>"porgerm",
		"value"=>$porgerm,
		"clases"=>"  form-control ",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="% Germinaci&oacute;n"',
		"etiqueta"=>"% Germinaci&oacute;n:", 
		"permisos"=>" "
);

$Arr_fgerm = array(
		"nom"=>"fgerm",
		"value"=>$fgerm,
		"clases"=>"  form-control datepicker",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Fecha Germinaci&oacute;n"',
		"etiqueta"=>"Fecha Germinaci&oacute;n:",
		"permisos"=>" readonly"
);



//------det------------------------------------------------------------------------------------------------------





//------------------------------------------------------------------------------------------------------------
$Arr_sqlorden= array(
		"nom_id1"=>"idsql_orden",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre",
		"seleccionar"=>'',
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT * FROM sql_orden",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Selecciones orden de los datos"',
		"etiqueta"=>"Orden:",
		"permisos"=>" "
);

$Arr_sqlnregistros= array(
		"nom_id1"=>"idsql_nregistros",
		"nom_id2"=>"",
		"nom_mostrar"=>"final",
		"seleccionar"=>'1',
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT * FROM sql_nregistros;",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Selecciones el Rango de los datos"',
		"etiqueta"=>"Registros:",
		"permisos"=>" "
);

//------------------------------------------------------------------------------------------------------------


?>