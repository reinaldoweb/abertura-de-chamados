<?php
session_start();

$_SESSION = 
require_once('conect.php')

$titulo = $_POST['tit_assunto'];
$conteudo = $_POST['texo_mensagem'];
$id_usuario = $_POST[''];
$id_unidade = $_POST[''];
$id_setor = $_POST[''];


$sql = "INSET INTO tab_chamado(tit_chamado,cont_chamado,id_usuario,id_unidade,id_setor)values()";


?>