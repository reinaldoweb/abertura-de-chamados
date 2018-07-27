<?php
session_start();

require_once('conect.php');

$usuario = $_POST['usuario'];
$email   = $_POST['email'];
$senha	 = $_POST['senha'];


$sql = "INSERT INTO tab_usuarios (nome_usuario,email,senha)VALUES('$usuario','$email','$senha')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//$sql = "SELECT * FROM tab_usuarios WHERE email = $email";





?>