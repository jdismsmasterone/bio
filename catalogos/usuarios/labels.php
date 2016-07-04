<?php 

$Arr_usuarios= array(
		"nom_id1"=>"idusuario",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_usuario",
		"seleccionar"=>$idusuario,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT idusuario, nombre_usuario FROM vw_usuarios;",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Usuarios"',
		"etiqueta"=>"Usuario:"
);

$Arr_nombre_usuario = array(
		"nom"=>"nombre_usuario",
		"value"=>$nombre_usuario,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Nombre del usuario"',
		"etiqueta"=>"Nombre de Usuario:"
);

$Arr_email = array(
		"nom"=>"email",
		"value"=>$email,
		"clases"=>"  form-control",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Email"',
		"etiqueta"=>"Email:"
);

$Arr_ubicaciones= array(
		"nom_id1"=>"idubicacion",
		"nom_id2"=>"",
		"nom_mostrar"=>"nombre_ubicacion",
		"seleccionar"=>$idubicacion,
		"clases"=>" chosen form-control",
		"consulta"=>"SELECT * FROM vw_combo_ubi",
		"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Ubicaciones"',
		"etiqueta"=>"Ubicacion:"
);

$Arr_roles= array(
    "nom_id1"=>"idrol",
    "nom_id2"=>"",
    "nom_mostrar"=>"nombre_rol",
    "seleccionar"=>$idrol,
    "clases"=>" chosen form-control",
    "consulta"=>"SELECT * FROM vw_roles",
	"tooltip"=>'data-toggle="tooltip" data-placement="top" title="Roles"',
	"etiqueta"=>"Rol:"
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



$t_principal = "csis_usuarios";


?>