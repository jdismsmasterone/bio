<?php

class Vlog {
    public $one = 0;

    public function show_one($nick) {
        if($nick){
            
           $sql="SELECT idusuario,idrol,nombre_usuario,email FROM csis_usuarios WHERE email='".$nick."'";
           //print $sql;
           $d=mysql_fetch_array(mysql_query($sql));
           $this->one=$d;
        }                
        return $this->one;
    }
}
?>
