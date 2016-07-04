
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>BIOTECNOLOGIA22COMERCIAL</title>
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
    body {
    margin: 0;
    font-family: 'Lato', sans-serif;
}

form{
  background-color: rgb(255,255,255);
}
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
   /* font-size: 20px;*/
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px !important;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .closebtn {
    font-size: 40px !important;
    top: 15px;
    right: 35px;
  }
}
</style>

<body>
     <!-- *************************************************** -->
     	<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php include "modulos/menu.php";?>
    </div>
  </div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- collapse -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  
  <div class="panel panel-default">
    
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
    
  </div>
</div>

<!-- fin collapse -->

<!-- full screen -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
    
<form class="form-horizontal" role="form" id="formulario_registro">
				 
	 <input type="hidden" class="form-control" id="id" name="id"  >
	 				 
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="nombre_usuario">Nombre:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre de Usuario" >
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="idubicacion">Ubicaci&oacute;n:</label>
	    <div class="col-sm-10">
	      <select><option>1</option></select>
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="idrol">Rol:</label>
	    <div class="col-sm-10">
	    <select><option>1</option></select>
	    </div>
	  </div>	  	   
	  
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="email">Email:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="email"  name="email" placeholder="Enter email"   autocomplete="off">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="pass">Password:</label>
	    <div class="col-sm-10"> 
	      <input type="password" class="form-control"  id="pass" name="pass" placeholder="Enter password"  autocomplete="off">
	    </div>
	  </div>
	  				
</form>
  </div>
</div>

<h2>Fullscreen Overlay Nav Example</h2>
<p>Click on the element below to open the fullscreen overlay navigation menu.</p>
<p>In this example, the navigation menu will slide downwards from the top:</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span>

<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}
 
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
     <!-- *************************************************** -->
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/chosen.jquery.js" type="text/javascript"></script>
    <script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/plugins/smartmenus/jquery.smartmenus.js"></script>
	<script type="text/javascript" src="js/plugins/smartmenus/jquery.smartmenus.bootstrap.js"></script> 
	<script type="text/javascript" src="modulos/ajax/menu.js"></script>
    
</body>

</html>
