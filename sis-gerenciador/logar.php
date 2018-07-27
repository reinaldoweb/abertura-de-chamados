<?php
session_start();

require_once('conect.php');


$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

$sql = "SELECT id_usuario,usuario,senha FROM tab_usuarios WHERE usuario = $usuario AND senha = $senha";

$result = $conn->query(sql);

if (isset['usuario']) {


	$_SESSION['usuario'] = $usuario;
	$_SESSION['id'] = $usuario;
	$_SESSION['usuario'] = $usuario;

	header('location:index.php');

}else{

	header('location:entar.php?erro=1');

}else{
	echo "Erro na execução da consulta, favor entrar em contato com o administrador do site.";
}
?>