<?php
INCLUDE 'conexao.php';
if (isset($_POST['confirmar'])) {
$nome = $_POST['login'];
$senha = $_POST['senha'];
$st = conectar();





$stmt = $st->query("SELECT * FROM administrador WHERE nm_emailadmin = '$nome' AND cd_senhaadmin = '$senha'");
//$stmt = $pdo->prepare("SELECT * FROM tb_usuario WHERE nm_usuario = '$nome' AND senha_usuario = '$senha'");

$stmt->execute();


if($stmt->rowCount() <= 0)
{
 echo "<script>alert('Usuarios ou Senha Incorretos!');
            top.location.href='admin.php';
            </script>";
exit;

   }
else{



session_start();
$_SESSION['logged_in'] = true;

echo "<script>alert('Voce foi autenticado com sucesso! Aguarde um instante');top.location.href='menuadmin.php';
</script>";

}
}	
?>