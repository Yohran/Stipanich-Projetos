<?php
 include_once 'conexao.php';
 $listar = lisUsuario();

?>
 <!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Stipanich Projetos é uma empresa de projetos industriais fundada em 2015 pelo projetista industrial Cleiton Stipanich">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="img/icon.png">
  <meta charset="utf-8">
  <title>Stipanich Projetos - Projetos industriais e Cívil</title>
  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/ec93157abf58f31dea6f91ac5/7739ac3e3aa4d6778cc254207.js");</script>
</head>
<body>
<header class="menu">
	 <nav id="j_menu" class="container">
    <div class="nav-wrapper">
    <a href=".." class="brand-logo"><img src="img/icon.png" class="responsive-img logo"></a>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> 
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href=".." class="top-menu">Home</a></li>
        <li><a href="../#servicos" class="top-menu">Serviços</a></li>
        <li><a href="../#contato" class="top-menu">Contato</a></li>
        </li><li><a href="Colaborador.php" class="top-menu">Área do Colaborador</a></li>
      </ul>
    </div>
    <ul id="slide-out" class="side-nav">
        <li><a href="../#servicos" class="dropdown-button" href="#!">Serviços</a></li>
        <li><a href="../#contato">Contato</a>
        </li><li><a href="Colaborador.php">Área do Colaborador</a></li>
      </ul>
      </div>
  </nav>
</header>
<main>
   <?php while($row = $listar->fetch(PDO::FETCH_OBJ))
  { ?>
	<div class="container" style="padding-top: 10%;">
		<form action="" method="POST">
        
<input type="hidden" name="id" value="<?php echo $row->cd_usuario; ?>">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Nome</span>
  <input type="text" class="form-control" name="nome" aria-describedby="basic-addon1" placeholder="<?php echo $row->nm_usuario; ?>" >
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">E-mail</span>
  <input type="email" class="form-control" name="email" aria-describedby="basic-addon1"  placeholder="<?php echo $row->nm_emailusuario; ?>">
</div>

			<button class="btn btn-default" type="submit" name="confirmar">Editar</button><br>
<input type="hidden" name="id" value="<?php echo $row->cd_usuario;?>">
  
  <button type="submit" name="excluir" class="btn btn-default" onclick="return confirm('Deseja mesmo excluir este usuário?');"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Excluir</button>
</form>
	</div><br>
  <?php 
}

$pdo = conectar();
if (isset($_POST['confirmar'])) {


 $ind = $_POST['id'];
$rs = $pdo->query("SELECT * FROM usuario where cd_usuario='$ind'");
$row = $rs->fetch(PDO::FETCH_OBJ);


 $nome = $_POST["nome"];
 $email = $_POST['email'];
 $ind = $_POST['id'];

if (empty($nome) && empty($email)) {

echo '<div class="container">
  <div class="alert alert-danger" role="alert">Não deixe nada em branco..</div></div>';
exit;


}




$stmt = $pdo->prepare("UPDATE `usuario` 
                       SET
                       `nm_usuario` = '$nome',
                       `nm_emailusuario` = '$email',
                       WHERE `cd_usuario` = '$ind'");

$stmt->execute();}






if (isset($_POST['excluir'])) {

$id = $_POST['id'];
$sql = $pdo->prepare("DELETE FROM usuario WHERE cd_usuario = '$id'");
$sql->execute(); 
if ($sql) {?>

<script type="text/javascript">alert('Excluido..');top.location.href='alterar.php';</script>


  <?php
} else {
 echo 'erro;';
}


}
?>
</main>
  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="black-text">Stipanich Projetos</h5>
              </div>
             <div>
                
                  <p class="tagline" style="display: inline-block;">Projetos Industriais&nbsp;</p><a href="https://api.whatsapp.com/send?phone=5513974217719" class="fa fa-whatsapp" target="_blank"></a>
                  <p class="tagline" style="display: inline-block;">Arquitetura&nbsp;</p><a href="https://api.whatsapp.com/send?phone=5511971721800" class="fa fa-whatsapp"target="_blank"></a>
                  <a href="https://www.facebook.com/stipanichprojetos" class="fa fa-facebook" target="_blank"></a>
              </div>
              </div>
          <div class="footer-copyright">
            <div class="container">
            <?php date_default_timezone_set('America/Sao_Paulo'); ?>
            <p class="copy">2017 - <?php echo date('Y');?> &copy; - Todos os direitos reservados<br/>
            Desenvolvido por Yohran Stipanich</p>
            </div>
          </div>
        </footer>
     
  <script type="text/javascript" src="js/jQuery.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>