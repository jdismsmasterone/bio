<?php 

// combo
$Arr_variedad= array(
		"nom_id1"=>"idvariedad",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_variedad",
		"seleccionar"=>$id,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idvariedad, nombre_variedad FROM cat_variedades;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Variedad"',
		"etiqueta"=>"Variedad:",
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
$Arr_nombre_variedad = array(
		"nom"=>"nombre_variedad",
		"value"=>$nombre_variedad,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre Variedad"',
		"etiqueta"=>"Nombre Variedad:",
		"permisos"=>''
);



$Arr_porcentaje_aumento = array(
		"nom"=>"porcentaje_aumento",
		"value"=>$porcentaje_aumento,
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