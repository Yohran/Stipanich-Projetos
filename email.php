<?php
	ini_set('display_erros', 1);
	error_reporting(E_ALL);	
	$from = $_POST['email'];
	$subject = $_POST['assunto'];
	$message = $_POST['message'];
	$to = "cleiton@stprojetos.com";
	$headers = "De ".$from;

	mail($to, $subject, $message, $headers);
	
	echo "<script>Alert('Mensagem Foi Enviada Com Sucesso')</script>";
	header('Location: index.php');




?>