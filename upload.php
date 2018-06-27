<!DOCTYPE html>
<html>
<head>
  <?php
  INCLUDE 'conexao.php'; 
  ?>
 
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
<main class="container">
 

  <form style="padding-top: 120px;" method="POST" enctype="multipart/form-data">
<input type="file" name="arquivo" accept="arquivos/*">
<button type="submit" name="Enviar">Enviar Arquivos</button>
</form>


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
<?php
INCLUDE 'conexao.php';
$st = conectar();
if (isset($_POST['Yohran'])) {
 
$arq_foto = $_FILES['arquivo'];

$diretorio = "arquivos/";

if(move_uploaded_file($arq_foto['tmp_name'], $diretorio.$arq_foto['name'])){

$nomefoto = $arq_foto['name'];
 //Pegando extensão do arquivo
date_default_timezone_set('America/Sao_Paulo');

$date = date("Y-m-d");
$stmt = $st->prepare("INSERT INTO arquivos (nm_arquivos,
                          dt_arquivos) 
                       VALUES ('$nomefoto',
                          '$date')");
$stmt->execute();
if ($stmt) {
    echo "<script>alert('Imagem enviada com sucesso')</script>";
} else {
    echo "<script>alert('Imagem não enviada')</script>";
}

}
/*else
{
  print "ERRO! Envie novamente ou verifique a extensão do arquivo";
}*/

 # code...
} 
?>