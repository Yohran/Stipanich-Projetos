<?php
set_time_limit(200);
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
        <li><a href="#servicos" class="top-menu">Serviços</a></li>
        <li><a href="#contato" class="top-menu">Contato</a></li>
       </li><li><a href="colaborador.php" class="top-menu">Área do Colaborador</a></li>
      </ul>
    </div>
    <ul id="slide-out" class="side-nav">
        <li><a href="#servicos" class="dropdown-button" href="#!">Serviços</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="colaborador.php">Área do Colaborador</a></li>
      </ul>
      </div>
  </nav>
</header>
<br>
<br>
<main class="fundo">
	<article class ="cabecalho">
     <div class="home">
		<header class="principal container">
			<h1 class="title intro">Quem Somos</h1>
			<p class="text-s">STIPANICH PROJETOS é uma empresa especialista em projetos industriais com grande experiência em plantas de fertilizantes e químicas, com know how em tubulação, mecânica, instrumentação, estrutura metálica, civil e arquitetura.</p>
			<p class="text-s">Desenvolvemos projetos, planejamento, coordenação, acompanhamento e fiscalização de obras.</p><br>      
    </header>
    </div>

	</article>
  <article id=servicos class="svc" style="padding-bottom: 10%">
    <div class="container">
      <center><h1 class="title pad_top">Serviços</h1></center>
    <center></div> 
    <div class="espaco" style="padding-left: 15%;">
      <div class="col s3">
      <center><a href="arquitetura.php"><img class="servicos" src="img/arquitetura.png"></a></center> 
        <h3 class="serv">Arquitetura e Consultoria</h3>
        <p class="tagline ser">Conheça nosso ramo de Arquitetura e Consultoria</p>
        <a href="arquitetura.php" class="btn-serv">Saiba Mais</a>
      </div>
    <div class="col s3">
    <center><a href="projetos.php"><img class="servicos" src="img/industria.png"></a></center> 
        <h3 class="serv">Projetos Industriais</h3>
        <p class="tagline ser">Conheça nosso ramo de Projetos Industriais</p>
        <a href="projetos.php" class="btn-serv">Saiba Mais</a>
      </div>
      <div class="col s3">
      <center><a href="obras.php"><img class="menor servicos" src="img/manutencao.png"></a></center> 
        <h3 class="serv">Obras e Manutenção</h3>
        <p class="tagline ser">Conheça nosso ramo em Obras e Manutenção</p>
        <a href="obras.php" class="btn-serv">Saiba Mais</a>
      </div>
    </div>
    </div></center>
      <a href=".." id="scroll-top" class="voltar-ao-topo" "></a>
    </article>
    <br>
    <article class="contato">
        <div class="email">
      <div class="container" id="contato">
    <h1 class="title pad_top">Entre em Contato Conosco</h1>
 <div class="row">
    <form class="col s12" method="post" action="email.php">
      <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" name="nome" class="validate" class="input" required>
          <label for="first_name">Nome</label>
        </div>
      <div class="rowr">
        <div class="input-field col s6">
          <input type="text" name="telefone" id="telefone" maxlength="15" required/>
          <label for="telefone">Telefone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>
      </div>
       <div class="row">
       <div class="input-field col s12">
          <input id="assnto" name="assunto" type="text" class="validate" required>
          <label for="assunto">Assunto</label>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12 text">
          <textarea id="textarea1" name="message" class="materialize-textarea" required></textarea>
          <label for="textarea1">Mensagem</label>
        </div>
      </div>
      <div class="row1" align="center">
      <input type="submit" name="Enviar" class="sub">
      </div>
  </div>
    </form></div></div>
</article>
<article class="missao-visao-valores ">
  <div class="vvm container">
      <p class="main_p"><b><img src="img/missão.png" alt="[Missão]" title="Missão" class="mvv" style="padding-top: 1%"> Missão: </b> Atender e superar a expectativa do cliente. </p>
      <p class="main_p"><b><img src="img/valores.png" alt="[Valores]" title="Valores" class="mvv"> Valores: </b> Segurança, Compromisso e Integridade. </p>
      <p class="main_p"><b><img src="img/visao.png" alt="[Visão]" title="Visão" class="mvv" style="padding-top: 0%;"> Visão:   </b> Ser a empresa parceira, que traz solução e confiabilidade sempre.</p></div>
</article>
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
            <?php date_default_timezone_set('America/Sao_Paulo');	?>
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