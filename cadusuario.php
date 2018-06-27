<meta charset="utf-8">
<?php
include_once "conexao.php";
$st = conectar();
 $nome = $_POST["nome"];
 $email = $_POST["email"];
$stmt = $st->prepare("INSERT INTO usuario(
										nm_usuario,
										  nm_emailusuario) 
										  VALUES ('$nome',
												  '$email')");
$stmt->execute();
echo "<script type='text/javascript'>alert('Usuário Cadastrado com Sucesso')</script>";
header('location:menuadmin.php');
?>
