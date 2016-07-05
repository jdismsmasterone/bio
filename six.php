<?php

require_once("class/class_login.php");//for login "este texto esta mas grande ahora"

if(!isset($_SESSION["nick"])){//validateSession
    
	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'";
    
}else{			
	/*
	include_once("class/globalvars.inc");//for varslog
	//___________________________________________________//
			$a 		= new Vlog;	//$a->show_one();
		    $s 		= serialize($a);
			file_put_contents('store'.$_SESSION['nick'], $s);
	//___________________________________________________//
	 
	 */
	
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>BIOTECNOLOGIA COMERCIAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/chosen/chosen.css">   
    <link rel="stylesheet" href="css/datepicker/datepicker.css">    
    <link rel="stylesheet" href="css/datepicker/datepicker.less">    
    <link rel="stylesheet" href="css/estilos.css">
    <link href="css/smartmenus/jquery.smartmenus.bootstrap.css" rel="stylesheet">
</head>

<style>
    body { padding-bottom: 70px; }   
</style>

<body>
    <?php include_once 'modulos/menu/menu.php'; ?>    
    <div class="row"> 
	    <div  class="col-xs-12" id="modulo">   
	        	<div class="jumbotron ">
	              <h1>BIENVENIDO <?php print $_SESSION["nombre_usuario"];?>!</h1>
	              <p>Para comenzar  <b>de click</b> en una alguna de las <span class="label label-primary">opciones</span> requeridas y situadas en el <b><span class="label label-default">menu</span></b> superior.</p>              
	            </div>
	    </div>
    </div>  
    <div id="bloquea" class="cargando" style="display:none;"> 
		  <img style="margin-left: 5%;margin-top: 15%" alt="Espere..." src="img/loading.gif" />
		  <div style="margin-left: 5%;margin-top: 18%"><h4>Procesando el reporte...</h4></div> 
	</div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/chosen.jquery.js" type="text/javascript"></script>
    <script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/plugins/smartmenus/jquery.smartmenus.js"></script>
	<script type="text/javascript" src="js/plugins/smartmenus/jquery.smartmenus.bootstrap.js"></script> 
	<script type="text/javascript" src="modulos/menu/menu.js"></script>
    
</body>

</html>
<?php } ?>
