<?php 

// combo
$Arr_tipocultivos= array(
		"nom_id1"=>"idtipocultivo",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_tipocultivo",
		"seleccionar"=>$id,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idtipocultivo, nombre_tipocultivo FROM cat_tipocultivo;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Tipo de Cultivos"',
		"etiqueta"=>"Tipo de Cultivo:",
		"permisos"=>''
);


//text
$Arr_nombre_tipocultivo = array(
		"nom"=>"nombre_tipocultivo",
		"value"=>$nombre_tipocultivo,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre del Cultivo"',
		"etiqueta"=>"Nombre del Cultivo:",
		"permisos"=>'',
		"permisos"=>''
);


$Arr_inicial = array(
		"nom"=>"inicial",
		"value"=>$inicial,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Inicial"',
		"etiqueta"=>"Inicial:",
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