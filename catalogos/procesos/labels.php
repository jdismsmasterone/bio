<?php 

// combo
$Arr_proceso= array(
		"nom_id1"=>"idproceso",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_proceso",
		"seleccionar"=>$id,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idproceso, nombre_proceso FROM cat_procesos;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Proceso"',
		"etiqueta"=>"Proceso:",
		"permisos"=>''
);


//text
$Arr_nombre_proceso = array(
		"nom"=>"nombre_proceso",
		"value"=>$nombre_proceso,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre Proceso"',
		"etiqueta"=>"Nombre Proceso:",
		"permisos"=>''
);


$Arr_idprioridad = array(
		"nom"=>"idprioridad",
		"value"=>$idprioridad,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Prioridad"',
		"etiqueta"=>"Prioridad:",
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