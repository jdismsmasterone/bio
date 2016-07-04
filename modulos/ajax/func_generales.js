function ValidaExistencia(valor){	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {  return 0;	}	else{ return 1;}}

function AbrirModulo(ruta,campos_url,abrir_En){
	$(".cargando").show();
	
	if(ValidaExistencia(ruta)==1){		if(ValidaExistencia(abrir_En)==1){	$( abrir_En ).load( ruta,{campos_url}, function(){	 $("#bloquea").hide(); 	  } );	}	}				    			
}

function Listado()       			{	AbrirModulo(ruta_modulo+"listado.php",ValoresFiltros(),'#listado');		BorrarEncabezadoFormulario(); 	BorrarDetalleFormulario(); Mostrarverocultarbotonfiltro();						}
function ListadoDetalle()			{	AbrirModulo(ruta_modulo+"detalle/listado_d.php",{id:$("#id").val()},'#listado_detalle');}

function Filtro()        			{	AbrirModulo(ruta_modulo+"listado_filtro.php",ValoresFiltros(),'#filtro');										}

function Formulario(id)  			{	$("#listado").html("");	        openNav();	        AbrirModulo(ruta_modulo+"formulario.php",id,'#formulario');		VerOcultarFiltro();	Ocultarverocultarbotonfiltro();		}
function FormularioDetalle(id)		{	$("#listado_detalle").html("");	openNavDetalle();	AbrirModulo(ruta_modulo+"detalle/formulario_d.php",id,'#formulario_detalle');					}

function GuardarSalir()				{	var $btn = $(".guardar").button('loading');	$.post( ruta_modulo+"modelo.php", $( "#formulario_registro" ).serialize()+"&solicitud="+"guardar"+"&id="+$(".cencabezado").val(), function( data )                     {		if(data==1){	closeNav();	        Listado();	       $btn.button('reset');	}else{	alert("Para continuar llene los siguientes campos porfavor: "+data); $btn.button('reset');		}	 });	  	 	}
function GuardarSalirDetalle()		{	var $btn = $(".guardar").button('loading');	$.post( ruta_modulo+"detalle/modelo.php", $( "#formulario_registro_d" ).serialize()+"&solicitud="+"guardar"+"&idencabezado="+$(".cencabezado").val(), function( data ) {		if(data==1){	closeNavDetalle();	ListadoDetalle();  $btn.button('reset');	}else{	alert("Para continuar llene los siguientes campos porfavor: "+data); $btn.button('reset');		}	 });	  	 	}

function GuardarContinuar()			{	var $btn = $(".guardar").button('loading');	$.post( ruta_modulo+"modelo.php", $( "#formulario_registro" ).serialize()+"&solicitud="+"guardar"+"&id="+$(".cencabezado").val(), function( data )                     {		if(data==1){	LimpiarCampos();	$btn.button('reset'); ListadoDetalle(); }else{	alert("Para continuar llene los siguientes campos porfavor: "+data);	$btn.button('reset'); 		}	 });    }
function GuardarContinuarDetalle()	{	var $btn = $(".guardar").button('loading');	$.post( ruta_modulo+"detalle/modelo.php", $( "#formulario_registro_d" ).serialize()+"&solicitud="+"guardar"+"&idencabezado="+$(".cencabezado").val(), function( data ) {		if(data==1){ 	LimpiarCamposDet(); $btn.button('reset'); }else{	alert("Para continuar llene los siguientes campos porfavor: "+data);	$btn.button('reset');		}	 });    }

function Eliminar(id)    			{	var r = confirm("Deseas eliminar este registro?");    if(r){		$.post( ruta_modulo+"modelo.php", "id="+id+"&solicitud="+"eliminar", function( data )         {	closeNav();			Listado();		  });    }else{    	return 0;    }}
function EliminarDetalle(id)  		{	var r = confirm("Deseas eliminar este registro?");    if(r){		$.post( ruta_modulo+"detalle/modelo.php", "id="+id+"&solicitud="+"eliminar", function( data ) {	closeNavDetalle();	ListadoDetalle(); });    }else{    	return 0;    }}

function VerOcultarFiltro()         {   $("#accordion_fbusqueda").toggle();                                                                                                     }

function MostrarBotonesGuardar()    {   $("#guardarsalir").css("display", "block");  $("#guardarconstinuar").css("display", "block");  $("#closenav").css("display", "block");  }
function OcultarBotonesGuardar()    {   $("#guardarsalir").css("display", "none");   $("#guardarconstinuar").css("display", "none");   $("#closenav").css("display", "none");   }

function Mostrarverocultarbotonfiltro()    {   $("#verocultarfiltro").css("display", "block");   } 
function Ocultarverocultarbotonfiltro()    {   $("#verocultarfiltro").css("display", "none");   }

function openNav() 					{   MostrarBotonesGuardar();		                                                    } 
function closeNav()					{   Listado(); OcultarBotonesGuardar();	 BorrarEncabezadoFormulario();  Filtro();           }

function openNavDetalle()           {						} 
function closeNavDetalle()          {	BorrarDetalleFormulario(); ListadoDetalle();	}

function LimpiarCampos()            {   $(":input").val("");	                }
function LimpiarCamposDet()         {   $(':input','#formulario_registro_d').val(""); $('.noaplica').attr('selected', 'selected');                                }


function BorrarEncabezadoFormulario()         {  $(".overlay_encabezado").html(""); }
function BorrarDetalleFormulario()            {  $(".overlay_detalle").html("");    }

