<?php require_once 'class/class_login.php'; 
$blog = new blog();
if (isset($_POST['grabar']) and $_POST['grabar']=='si'){
	$blog->nueva_sesion();
}else{

}
?>


<style type="text/css"> 
*{ 
    font-size: 14px; 
} 
body{ 
background:#aaa; 
} 
form.login { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 278px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.login div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.login div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.login div input[type="text"], form.login div input[type="password"] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.login div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #C6C6C6; 
    float: right; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 

<form name="form" action="" method="post" class="login"> 
    <div><label>Username</label><input name="email" type="text" ><input type="hidden" name="grabar" value="si"></div> 
    <div><label>Password</label><input name="pass" type="password"></div> 
    <div><input type="submit" value="Inicia sesion" ></div> 
    <?php
        if(isset($_GET['usuario'])){
            switch($_GET['usuario']){
                    case 'no_existe':
                    print "El usuario no existe";                    
            }
        }
        
    ?>
    
</form> 