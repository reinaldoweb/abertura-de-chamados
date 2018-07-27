<?php
session_start();
require_once('conect.php');
if(isset($_SESSION['usuario'])){
 	header('location:index.php?erro=1');




$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

$sql = "SELECT id_usuario,usuario,senha FROM tab_usuarios WHERE usuario = $usuario AND senha = $senha";

$conn->query($sql);

	
	 if(isset($usuario)){
	 	$_SESSION['id_usuario'] = id_usuario;
	 	$_SESSION['usuario'] = $usuario;
	 	$_SESSION['email'] = $email;

	 	header('location:index.php');
	 }else{
	 	header('location:entrar.php?erro=1');
	 }
?>