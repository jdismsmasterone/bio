<?php 
//GetVarsLog----------------------------------------------------------
//include("../class/globalvars.inc");
/*$s 			= file_get_contents('store'.$_SESSION['nick']);
$a 			= unserialize($s);
$arraylogs	= $a->show_one($_SESSION['nick']);
*/
//--------------------------------------------------------------------
?>
<?php

require_once("class/class_login.php");//for login

if(!isset($_SESSION["nick"])){//validateSession
    
	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'";
    
}else{
	
	
	
?>





<!-- Navbar -->
<div class="navbar navbar-default" role="navigation">
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <img src="source/img/LogoPlant_t.png"  height="42" width="55">
    <a class="navbar-brand" href="#"></a>
  </div>
  
  <div class="navbar-collapse collapse">

    <!-- Left nav -->
    <ul class="nav navbar-nav">
      
      <li><a href="#">Catalogos <span class="caret"></span></a>
        <ul class="dropdown-menu">         
          <li><a href="#" id="catalogos/cultivos"  class="menujs">Cultivos</a></li>
          <li><a href="#" id="catalogos/tipocultivos" class="menujs">Tipo de Cultivos</a></li>
          <li><a href="#" id="catalogos/presentaciones" class="menujs">Presentaciones</a></li>
          <li><a href="#" id="catalogos/variedades" class="menujs">Variedades</a></li>
          <li><a href="#" id="catalogos/patrones" class="menujs">Patrones</a></li>
          <li><a href="#" id="catalogos/procesos" class="menujs">Procesos</a></li>
          <li><a href="#" id="catalogos/tareas" class="menujs">Tareas</a></li>
          <li><a href="#" id="catalogos/cat_casa_comercial" class="menujs">Casa Comercial</a></li>
          <li><a href="#">Configuraci&oacute;n <span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a href="#" id="catalogos/usuarios" class="menujs">Usuarios</a></li>                  
                  <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>            
                </ul>
              </li>
          <!--<li class="divider"></li>   -->       
        </ul>
      </li>
      
      	<li><a href="#">Transacciones <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	            <li><a href="#" id="transacciones/rec_sem" class="menujs">Recepci&oacute;n de Semilla</a></li>
	            <li><a href="#" id="transacciones/cotizaciones" class="menujs">Cotizaciones</a></li>  
	            <li><a href="#" id="transacciones/ord_prod" class="menujs">Orden de Producci&oacute;n</a></li>                    
	        </ul>
    	</li>
      
    </ul>

    <!-- Right nav -->
    <ul class="nav navbar-nav navbar-right">          
      <li><a href="#">Configuraci&oacute;n <span class="caret"></span></a>
        <ul class="dropdown-menu">          
          <li><a href="cerrar_sesion.php"  class="menujs">Cerrar Sesi&oacute;n  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>         
        </ul>
      </li>
    </ul> 
	
  </div><!--/.nav-collapse -->
</div>
<?php }?>
