/*   $(function() {  alert("menu");   });   */

//***************************************************************************************************************
//Eventos********************************************************************************************************
//***************************************************************************************************************

//MenuLinkJS____________________________________________________________________________________________________
$(".menujs").click(function(){
    var attr = $(this).attr('id');
    
   if (typeof attr !== typeof undefined && attr !== false) {
        AMod(attr,"");
    }        
});




//****************************************************************************************************************
//Funciones*******************************************************************************************************
//****************************************************************************************************************

//OpenModuloJs____________________________________________________________________________________________________
function AMod(n_modulo,curl){
    if(curl==""){curl="";}
    var n_modulo = n_modulo+"/index.php"+curl;
    $( "#modulo" ).load( n_modulo );
}