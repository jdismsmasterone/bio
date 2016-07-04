<?php session_start(); if(!isset($_SESSION['nick'])){	print "Debe iniciar session para acceder a este contenido  <a href='index.php'>Pagina principal</a>'"; }else{	
require_once '../../../class/conexion.php';	$con = new DC; $con->ConexDb();
require_once '../../../class/sql.php';
require_once '../../../class/crear_campos.php';}
?>