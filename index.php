<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>Projeto Pequeno Cidadão</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
   </head>
   <body>
      <div class="main-top" id="home">
         <!-- header -->
         <div class="headder-top">
               <!-- nav -->
               <nav >
                  <div id="logo">
                     <h1><a class="logotipo" href="index.php" >O Pequeno Cidadão</a></h1>
                  </div>
                  <label for="drop" class="toggle">MENU</label>
                  <input type="checkbox" id="drop">
                  <ul class="menu mt-2">
                     <li class="active"><a href="index.php">Home</a></li>
                     <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle toogle-2">Sobre nós <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Sobre nós <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2">
                        <ul>
                           <li><a href="oprojeto.php" class="drop-text">O projeto</a></li>
                           <li><a href="galeria.php" class="drop-text">Galeria</a></li>
                           <!-- <li><a href="biblioteca.php" class="drop-text">Biblioteca</a></li> -->
                           <li><a href="relatorio.php" class="drop-text">Relatórios</a></li>
                        </ul>
                     </li>
                     <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="programacao.php">Programação</a></li>
                     <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="eventos.php">Eventos</a></li>
                     <li><a href="contato.php">Contato</a></li>
                  </ul>
               </nav>
               <!-- //nav -->
            </div>
         <!-- //header -->
         <!-- banner -->
         <div class="main-banner text-center">
            <div class="container">
               <div class="style-banner ">
                  <h4 class="mb-lg-3 mb-2"></h4>
                  <h5>
                     Desde 1996 incentivando a criança e promovendo a cidadania com formação educacional e profissional.
                  </h5>
               </div>
               <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                  <a href="#about" class="btn">CONHEÇA</a>
               </div>
            </div>
         </div>
      </div>
      <!-- //banner -->
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-5 col-md-6 about-imgs-txt">
                  <img src="images/ab1.jpg" alt="news image" class="img-fluid">
               </div>
               <div class="col-lg-7 col-md-6 text-right about-two-grids">
                  <div class="wthree-about-txt mb-lg-5 mb-md-4 mb-3">
                     <h5>Conheça o projeto!</h5>
                  </div>
                  <div class="about-para-txt" style="text-align: justify;">
                     <p>Promovendo a cidadania, o Projeto Pequeno Cidadão visa o incentivo à criança, através da formação educacional e encaminhamento profissional dos adolescentes.</p>
                     <p>Atende anualmente 220 crianças e adolescentes, com idades entre 10 e 14 anos, em situação de vulnerabilidade econômica. A execução fica a cargo da equipe executiva e pela Universidade de São Paulo, Prefeitura do Campus USP de São Carlos, que cede  a estrutura física e administrativa.</p>
                     <p>Desde 1997 a KPMG patrocina integralmente o Projeto Pequeno Cidadão</p>
                  </div>
                  <div class="view-buttn mt-lg-5 mt-md-4 mt-3">
                     <a href="oprojeto.php" class="">Saiba mais</a>
                  </div>
               </div>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-3" >
               <div class="col-lg-3 col-md-6 col-sm-6 about-abt-grid">
                  <div class="about-oil-w3layouts text-center">
                     <div class="about-icon mb-lg-5 mb-md-4 mb-3">
                        <span class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 50px !important;"></span>
                     </div>
                     <div class="about-grid-title">
                        <h4 class="mb-lg-3 mb-2" style="font-size: 55px !important;">90% </h4>
                        <p>Estão estudando em alguma instituição de ensino.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 about-abt-grid">
                  <div class="about-oil-w3layouts text-center">
                     <div class="about-icon mb-lg-5 mb-md-4 mb-3">
                        <span class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 50px !important;"></span>
                     </div>
                     <div class="about-grid-title">
                        <h4 class="mb-lg-3 mb-2" style="font-size: 55px !important;">84% </h4>
                        <p>Nunca foram reprovados na escola.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 about-abt-grid">
                  <div class="about-oil-w3layouts text-center">
                     <div class="about-icon mb-lg-5 mb-md-4 mb-3">
                        <span class="fa fa-building" aria-hidden="true" style="font-size: 50px !important;"></span>
                     </div>
                     <div class="about-grid-title">
                        <h4 class="mb-lg-3 mb-2" style="font-size: 55px !important;">82%</h4>
                        <p>Estão cursando ou já cursaram algum curso profissionalizante.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 about-abt-grid">
                  <div class="about-oil-w3layouts text-center">
                     <div class="about-icon mb-lg-5 mb-md-4 mb-3">
                        <span class="fa fa-briefcase" aria-hidden="true" style="font-size: 50px !important;"></span>
                     </div>
                     <div class="about-grid-title">
                        <h4 class="mb-lg-3 mb-2" style="font-size: 55px !important;">24%</h4>
                        <p>Trabalham ou já trabalharam após sair do projeto.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div style="margin-top: 20px; text-align: justify;">
               O Projeto Pequeno Cidadão, desde 1997, atende 220 crianças, diariamente, com atividades de complementação.<br>
               O acompanhamento anual dos jovens adolescentes que completam o ciclo de 4 anos no Projeto já apresentou resultados expressivos!
            </div>
         </div>
      </section>
      <!-- //about  -->
      <!-- service -->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2" >Nossas atividades</h3>
            <div class="row">
               <div class="col-lg-6 service-two-grids">
                  <div class="img-cols-grid row" style="padding-left: 25px;">

                     <div class="">
                        <h1 class="logotipo" style="font-weight: 600; color: #D8851C;">Culturais</h1>
                        <br>
                        &nbsp;&nbsp;&#9900; Trabalhar temas polêmicos como o preconceito, violencia, etc.<br>
                        &nbsp;&nbsp;&#9900; Produção de texto coletivo<br>
                        
                        <h1 class="logotipo" style="font-weight: 600; color: #D8851C;">Esportivas</h1>
                        <br>
                        &nbsp;&nbsp;&#9900; Basquete<br>
                        &nbsp;&nbsp;&#9900; Handebol<br>
                        &nbsp;&nbsp;&#9900; Futebol de Salão<br>
                        &nbsp;&nbsp;&#9900; Futebol de Campo<br>
                        &nbsp;&nbsp;&#9900; Futebol de Areia<br>
                        &nbsp;&nbsp;&#9900; Atletismo<br>
                        &nbsp;&nbsp;&#9900; Vôlei<br>
                        &nbsp;&nbsp;&#9900; Natação<br>
                        &nbsp;&nbsp;&#9900; Triathlon<br>

                        <h1 class="logotipo" style="font-weight: 600; color: #D8851C;">Sociais</h1>
                        <br>
                        &nbsp;&nbsp;&#9900; Tratamento Dentário<br>
                        &nbsp;&nbsp;&#9900; Corte de cabelo<br>
                        &nbsp;&nbsp;&#9900; Acompanhamento Médico<br>
                        &nbsp;&nbsp;&#9900; Educação alimentar<br>
                        &nbsp;&nbsp;&#9900; Encontros sobre meio ambiente/reciclagem de lixo<br>
                        &nbsp;&nbsp;&#9900; Encontro para a integração da família com o projeto<br>
                        
                     </div>
                    
                  </div>
               </div>
               <div class="color-img-five col-lg-6">
               </div>
            </div>
         </div>
      </section>
      <!--//service -->
      <!--information -->
      <section class="info py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="info-matter">
               <h5>Nossa missão é investir na formação da criança e do adolescente, promovendo a educação, a cultura e oportunizando o acesso destes jovens ao mercado de trabalho.</h5>
            </div>
         </div>
      </section>
      <!--//information -->
      <!--blog-->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Nosso mural</h3>
            <div class="row mt-lg-5 mt-md-4 mt-3">

               <div class="col-lg-4 col-md-6 blog-grid-behind">
                  <div class="blog-images-us">
                     <div class="blog-wthree-sub">
                        <h4 class="pb-3"><a href="#">Feira da Barganha</a></h4>
                        <p>
                           Aconteceu mais uma Feira da Barganha do Projeto Pequeno Cidadão, a atividade tem por objetivo estimular a troca e a reutilização de bens e objetos.
                           As crianças realizaram muitas trocas e ficaram super contentes!
                           Confira as fotos na galeria.
                        </p>
                     </div>
                  </div>
               </div>

              

               <div class="col-lg-4 col-md-6 blog-grid-behind">
                  <div class="blog-images-us">
                     <div class="blog-wthree-sub">
                        <h4 class="pb-3"><a href="#">Master Chefinho 2018</a></h4>
                        <p>
                           E já começou a competição mais saborosa do Projeto Pequeno Cidadão!
                           Confira as fotos em nossa galeria.
                        </p>
                     </div>
                  </div>
               </div>

              

               <div class="col-lg-4 col-md-6 blog-grid-behind">
                  <div class="blog-images-us">
                     <div class="blog-wthree-sub">
                        <h4 class="pb-3"><a href="#">Início das atividades do 2º semestre</a></h4>
                        <p>
                           Dia 13/08 retornamos com as atividades do 2º semestre 2018!
                        </p>
                     </div>
                  </div>
               </div>

               

            </div>
         </div>
      </section>
      <!--//blog-->

      
<?php
  require 'requires/footer.htm';
?>