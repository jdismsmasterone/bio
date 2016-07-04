<?php 

$Arrfiltro_idcotizacion = array(
		"nom"=>"idcotizacion",
		"value"=>$id,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Folio"',
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

$Arr_idcotizacion = array(
		"nom"=>"idcotizacion",
		"value"=>$id,
		"clases"=>"  form-control cencabezado",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Folio"',
		"etiqueta"=>"Folio:",
		"permisos"=>' readonly'
);


$Arr_idcliente= array(
		"nom_id1"=>"idcliente",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre",
		"seleccionar"=>$idcliente,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idcliente, nombre FROM ccli_clientes  ORDER BY nombre ASC",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Cliente"',
		"etiqueta"=>"Cliente:",
		"permisos"=>''
);



$Arr_fecha = array(
		"nom"=>"fecha",
		"value"=>$fecha,
		"clases"=>"  form-control ",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Fecha"',
		"etiqueta"=>"Fecha:",
		"permisos"=>" readonly"
);

$Arr_nombre_mostrador = array(
		"nom"=>"nombre_mostrador",
		"value"=>$nombre_mostrador,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Nombre Mostrador"',
		"etiqueta"=>"Nombre Mostrador:",
		"permisos"=>"  "
);

$Arr_domicilio = array(
		"nom"=>"domicilio",
		"value"=>$domicilio,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Domicilio"',
		"etiqueta"=>"Domicilio:",
		"permisos"=>""
);

$Arr_observaciones = array(
		"nom"=>"observaciones",
		"value"=>$observaciones,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Observaciones"',
		"etiqueta"=>"Observaciones:",
		"permisos"=>' '
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
					<option value ='$Arrfiltro_idcotizacion[nom]'>FOLIO</option>
					<option value ='$Arrfiltro_fecha[nom]'>FECHA</option>
					<option value ='$Arr_clientes[nom_mostrar]'>CLIENTE</option>
		",
		"permisos"=>""
);





//DET##############################################################################################################################################
//DET##############################################################################################################################################
$Arr_idcotizaciondetalle = array(
		"nom"=>"id",
		"value"=>$idcotizaciondetalle,
		"clases"=>"  ",
		"tooltip"=>'',
		"etiqueta"=>"",
		"permisos"=>" readonly style='    visibility: hidden; '"
);

$Arr_idproducto= array(
		"nom_id1"=>"idproducto",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_producto",
		"seleccionar"=>$idproducto,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idproducto,  concat_ws('..........',idcodigo,nombre_producto) as nombre_producto FROM cat_productos  ORDER BY nombre_producto ASC",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Producto"',
		"etiqueta"=>"Producto:",
		"permisos"=>" "
);


$Arr_plantas = array(
		"nom"=>"plantas",
		"value"=>$plantas,
		"clases"=>"  form-control col-sm-10",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Plantas"',
		"etiqueta"=>"Plantas:",
		"permisos"=>' '
);

$Arr_lote = array(
		"nom"=>"lote",
		"value"=>$lote,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Lote"',
		"etiqueta"=>"Lote:",
		"permisos"=>' '
);

$Arr_precio = array(
		"nom"=>"precio",
		"value"=>$precio,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Precio"',
		"etiqueta"=>"Precio:",
		"permisos"=>' '
);

$Arr_variedad_detalle = array(
		"nom"=>"variedad_detalle",
		"value"=>$variedad_detalle,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Variedad Detalle"',
		"etiqueta"=>"Variedad Detalle:",
		"permisos"=>' '
);

$Arr_patron_detalle = array(
		"nom"=>"patron_detalle",
		"value"=>$patron_detalle,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Patron Detalle"',
		"etiqueta"=>"Patron Detalle:",
		"permisos"=>' '
);


$Arrfiltro_fecha_siembra = array(
		"nom"=>"fecha_siembra",
		"value"=>$fecha_siembra,
		"clases"=>"  form-control datepicker",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Fecha Siembra"',
		"etiqueta"=>"Fecha Siembra:",
		"permisos"=>" "
);


$Arrfiltro_fecha_embarque = array(
		"nom"=>"fecha_embarque",
		"value"=>$fecha_embarque,
		"clases"=>"  form-control datepicker ",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Fecha Embarque"',
		"etiqueta"=>"Fecha Embarque:",
		"permisos"=>" "
);


$Arr_material_empaque = array(
		"nom"=>"material_empaque",
		"value"=>$material_empaque,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Material De Empaque"',
		"etiqueta"=>"Material De Empaque:",
		"permisos"=>' '
);

$Arr_ikp = array(
		"nom"=>"ikp",
		"value"=>$ikp,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="ikp"',
		"etiqueta"=>"IKP:",
		"permisos"=>' '
);


$Arr_block = array(
		"nom"=>"block",
		"value"=>$block,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Block"',
		"etiqueta"=>"Block:",
		"permisos"=>' '
);


$Arr_status = array(
		"nom"=>"status",
		"value"=>$status,
		"clases"=>"  form-control",
		"tooltip"=>' data-toggle="tooltip" data-placement="top" title="Cerrar"',
		"etiqueta"=>"Cerrar:",
		"permisos"=>' '
);

//#################################################################################################################################################
//#################################################################################################################################################





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