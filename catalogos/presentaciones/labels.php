<?php 

// combo
$Arr_presentacion= array(
		"nom_id1"=>"idpresentacion",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_presentacion",
		"seleccionar"=>$id,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idpresentacion, nombre_presentacion FROM cat_presentacion;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Presentacion"',
		"etiqueta"=>"Presentacion:",
		"permisos"=>''
);


//text
$Arr_nombre_presentacion = array(
		"nom"=>"nombre_presentacion",
		"value"=>$nombre_presentacion,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre Presentacion"',
		"etiqueta"=>"Nombre Presentacion:",
		"permisos"=>''
);


$Arr_nombre_corto = array(
		"nom"=>"nombre_corto",
		"value"=>$nombre_corto,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre Corto"',
		"etiqueta"=>"Nombre Corto:",
		"permisos"=>''
);


$Arr_tipo_presentacion = array(
		"nom"=>"tipo_presentacion",
		"value"=>$tipo_presentacion,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Tipo Presentacion"',
		"etiqueta"=>"Tipo Presentacion:",
		"permisos"=>''
);




$Arr_sqlorden= array(
		"nom_id1"=>"idsql_orden",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre",
		"seleccionar"=>'',
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT * FROM sql_orden",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Selecciones orden de los datos"',
		"etiqueta"=>"Orden:",
		"permisos"=>''
);

$Arr_sqlnregistros= array(
		"nom_id1"=>"idsql_nregistros",
		"nom_id2"=>"",
		"nom_mostrar"=>"final",
		"seleccionar"=>'1',
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT * FROM sql_nregistros;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Selecciones el Rango de los datos"',
		"etiqueta"=>"Registros:",
		"permisos"=>''
);




?>