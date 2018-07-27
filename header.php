<?php


require_once('conect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Sistema de atendimento ao usuario.">
    <meta name="author" content="Reinaldo J. Santos">
    <!-- Bootstrap core CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Sistema de Atendimento ao usuário</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <a class="navbar-brand" href="#">
        <img alt="Sistema de atendimento ao usuário" src="..."></a>
                  <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation"><a href="abrir_chamado.php">Abrir chamado</a></li>
                    <li role="presentation"><a href="meus_chamados.php">Meus chamados</a></li>
                    <li role="presentation"><a href="cadastrar_usuario.php">Cadastre-se</a></li>
                    <li role="presentation"><a href="entrar.php">Entrar</a></li>
                    <li role="presentation"><a href="sair.php">Sair</a></li>
                  </ul>
                </nav>