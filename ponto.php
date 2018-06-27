<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/materialize.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
INCLUDE 'conexao.php';
$st = conectar();
date_default_timezone_set('America/Sao_Paulo');
$datahora=date('Y-m-d h:i:s');
$stmt = $st->prepare("INSERT INTO ponto (dt_ponto) VALUES (NOW() );");
$stmt->execute();
echo "<script type='text/javascript'>alert('Ponto batido com Sucesso')</script>";
header("location: menu.php");
?>
