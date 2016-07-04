<?php 

// combo
$Arr_patron= array(
		"nom_id1"=>"idpatron",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_patron",
		"seleccionar"=>$id,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idpatron, nombre_patron FROM cat_patron;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Patron"',
		"etiqueta"=>"Patron:",
		"permisos"=>''
);


$Arr_idcultivo= array(
		"nom_id1"=>"idcultivo",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_cultivo",
		"seleccionar"=>$id,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idcultivo, nombre_cultivo FROM cat_cultivo;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Cultivo"',
		"etiqueta"=>"Cultivo:",
		"permisos"=>''
);



//text
$Arr_nombre_patron = array(
		"nom"=>"nombre_patron",
		"value"=>$nombre_patron,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre Patron"',
		"etiqueta"=>"Nombre Patron:",
		"permisos"=>''
);



$Arr_porcentaje_aumento = array(
		"nom"=>"porcentaje_aumento",
		"value"=>$porcentaje_aumento,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Porcentaje Aumento"',
		"etiqueta"=>"Porcentaje Aumento:",
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