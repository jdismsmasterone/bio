<?php 

$Arr_cultivos= array(
		"nom_id1"=>"idcultivo",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_cultivo",
		"seleccionar"=>$idcultivo,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idcultivo, nombre_cultivo FROM cat_cultivo;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Cultivos"',
		"etiqueta"=>"Cultivo:"
);

$Arr_nombre_cultivo = array(
		"nom"=>"nombre_cultivo",
		"value"=>$nombre_cultivo,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre del Cultivo"',
		"etiqueta"=>"Nombre del Cultivo:"
);


$Arr_inicial = array(
		"nom"=>"inicial",
		"value"=>$inicial,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Inicial"',
		"etiqueta"=>"Inicial:"
);




$Arr_sqlorden= array(
		"nom_id1"=>"idsql_orden",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre",
		"seleccionar"=>'',
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT * FROM sql_orden",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Selecciones orden de los datos"',
		"etiqueta"=>"Orden:"
);

$Arr_sqlnregistros= array(
		"nom_id1"=>"idsql_nregistros",
		"nom_id2"=>"",
		"nom_mostrar"=>"final",
		"seleccionar"=>'1',
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT * FROM sql_nregistros;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Selecciones el Rango de los datos"',
		"etiqueta"=>"Registros:"
);




?>