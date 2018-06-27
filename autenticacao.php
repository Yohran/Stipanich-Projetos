<?php
INCLUDE 'conexao.php';
if (isset($_POST['confirmar'])) {
$nome = $_POST['email'];
$senha = $_POST['senha'];
$st = conectar();





$mt = $st->query("SELECT * FROM usuario WHERE nm_emailusuario = '$nome' AND cd_senhausuario = '$senha'");
//$stmt = $pdo->prepare("SELECT * FROM tb_usuario WHERE nm_usuario = '$nome' AND senha_usuario = '$senha'");

$mt->execute();


if($mt->rowCount() <= 0)
{
 echo "<script>alert('Usuarios ou Senha Incorretos!');
            top.location.href='colaborador.php';
            </script>";
exit;

   }
else{



session_start();
$_SESSION['logged_in'] = true;

echo "<script>alert('Voce foi autenticado com sucesso! Aguarde um instante');top.location.href='menu.php';
</script>";

}





}
?>