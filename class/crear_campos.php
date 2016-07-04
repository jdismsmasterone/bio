<?php 


class CrearCampos extends datosMysql {
	
	function Combobox($parametros) {
		
		$q = $this->Query($parametros['consulta']);
		$options .="<option value='' class='noaplica'>NO APLICA</option> ";
		while ( $d = mysql_fetch_array( $q )	 ) {
		
			$sel     = "";
			if( $d[$parametros[nom_id1]]==$parametros['seleccionar'] ){				$sel = "selected";			}
			
			$options .="<option value='".$d[$parametros[nom_id1]]."' $sel>".$d[$parametros[nom_mostrar]]."</option> ";
		
		}
		if($parametros[nom_id2]==""){$idname=$parametros[nom_id1];}else{ $idname=$parametros[nom_id2]; }
		$select = "<select id='".$idname."' name='".$idname."' class='".$parametros[clases]."' ".$lectura." ".$parametros[tooltip]." ".$parametros[permisos].">".$options."</select>";
		//$select = "<select id='".$parametros[nom_id1]."' name='".$parametros[nom_id1]."' class='".$parametros[clases]."' ".$lectura." ".$parametros[tooltip]." ".$parametros[permisos].">".$options."</select>";
		print $select;
	}
	
	public function Label($parametros){
		echo'<label for="'.$parametros[nom_id1].'">'.$parametros[etiqueta].'</label>';
	}
	
	function ComboboxCompuesto($parametros) {	
		$otrasopciones = $parametros[tooltip]."".$parametros[permisos];
		
		$select = "<select id='".$parametros[nom_id1]."' name='".$parametros[nom_id1]."' class='".$parametros[clases]."' ".$otrasopciones." >".$parametros[options]."</select>";
		print $select;
	}
	
	public function CrearInputText($parametros){
		//<input type="text" class="form-control" id="lote" name="lote" placeholder="Lote" value=" print $Arr_lote['value'] ">
		$x='
			<input type="text" 
				   class="'.$parametros[clases].'" 
				   id="'.$parametros[nom].'" 
				   name ="'.$parametros[nom].'"
				   placeholder="'.$parametros[etiqueta].'"
				   value="'.$parametros[value].'"
				   '.$parametros[permisos].' >                       
		';
		echo $x;
	}
	
}


class CrearBotones{
	
	public function BotonesFiltro(){
		echo'
				<div class="btn-group col-sm-4" >
				<button id="nuevo"  type="button" class="btn btn-success btn-sm" onclick="Formulario();" data-toggle="tooltip" data-placement="top" title="Nuevo" data-loading-text="Loading..." >Nuevo <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></button>
				<button id="buscar" type="button" class="btn btn-info btn-sm"    onclick="Listado();" data-toggle="tooltip" data-placement="top" title="Mostrar Resultados" data-loading-text="Loading..." >Buscar <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				<button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
				<ul class="dropdown-menu">
				<li><a href="#" onclick="Filtro();">Actualizar Filtro de Busqueda <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a></li>
				</ul>
				</div>
		';
	}
	
	
	public function BotonesFiltro2(){
		echo'
				<div class="btn-group col-sm-4" >
				<button id="buscar" type="button" class="btn btn-info btn-sm"    onclick="Listado();" data-toggle="tooltip" data-placement="top" title="Mostrar Resultados" data-loading-text="Loading..." >Buscar <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				<button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
				<ul class="dropdown-menu">
				<li><a href="#" onclick="Filtro();">Actualizar Filtro de Busqueda <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a></li>
				</ul>
				</div>
		';
	}
	
	public function BotonesGuardado() {
		echo'
		<div class="btn-group " >
		<button id="guardarsalir"       type="button" class="btn btn-success btn-sm guardar" 	onclick="GuardarSalir();"			data-loading-text="Loading..." class="btn btn-primary" >Guardar Cambios/Salir</button>
		<button id="guardarcontinuar"	type="button" class="btn btn-info btn-sm guardar" 	    onclick="GuardarContinuar();" 	 	data-loading-text="Loading..." class="btn btn-primary" >Guardar Cambios/Nuevo</button>
		<button 						type="button" class="btn btn-warning btn-sm"  			onclick="closeNav();">Cerrar Sin Guardar</button>
		</div>
		';
	}
	
	public function BotonesGuardado2(){
		echo'<nav role="navigation" class="navbar navbar-inverse navbar-fixed-bottom">
			    <div class="container-fluid" >        
			        <div id="navbarCollapse" class="collapse navbar-collapse" >
			            <ul class="nav navbar-nav">                
			                <li><a href="#" id="formulario"        onclick="Formulario();"       style="color: #cc6600;"><span class="glyphicon glyphicon-plus-sign"   aria-hidden="true"> </span> Nuevo              </a></li>
			                <li><a href="#" id="guardarsalir"      onclick="GuardarSalir();"     style="color: #cc6600; display:none;"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> </span> Guardar/Salir      </a></li>
			                <li><a href="#" id="guardarconstinuar" onclick="GuardarContinuar();" style="color: #cc6600; display:none;"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> </span> Guardar/Continuar  </a></li>
			                <li><a href="#" id="closenav"          onclick="closeNav();"         style="color: #cc6600; display:none;"><span class="glyphicon glyphicon-list" aria-hidden="true">        </span> Cerrar             </a></li>
							<li><a href="#" id="verocultarfiltro"  onclick="VerOcultarFiltro();" style="color: #cc6600;"><span class="glyphicon glyphicon-search" aria-hidden="true">      </span> Ver/Ocultar Filtro </a></li>
			            </ul>
			        </div>
			    </div>
			 </nav>';
	}

	public function BotonesGuardadoDetalle() {
		echo'
		<div class="btn-group " >
		<button id="guardarsalir"       type="button" class="btn btn-success btn-sm guardar" 	onclick="GuardarSalirDetalle();"			data-loading-text="Loading..." class="btn btn-primary" >Agregar/Salir</button>
		<button id="guardarcontinuar"	type="button" class="btn btn-info btn-sm guardar" 	    onclick="GuardarContinuarDetalle();" 	 	data-loading-text="Loading..." class="btn btn-primary" >Agregar/Nuevo</button>
		<button 						type="button" class="btn btn-warning btn-sm"  			onclick="closeNavDetalle();">Cerrar</button>
		</div>
		';
	}

}

class FunctionesGlobales{
	
	public function CurrencyDate(){
		return date("Y-m-d");
	}
}






?>