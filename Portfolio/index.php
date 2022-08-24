<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/flat-ui.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="./style.css">
    <meta name="theme-color" content="#333641">
    <title>BOUCHEZ</title>

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-inverse navbar-fixed-top transparent">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
    </div> <!-- .navbar-header -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">A Propos</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div> <!-- .navbar-collapse -->
  </div> <!-- .container -->
</nav>
<main data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="jumbotron photo-cover text-inverse" id="test">
      <div class="col-md-6 text-center center">
        <h1><span>BOUCHEZ Kévin</span></h1>
        <p >Développeur Web & Web Mobile</p>
        <a href="#about">
        <span class="fui-triangle-down large"></span>
        </a>
      </div> <!-- .col-md-6 -->
    </div> <!-- .jumbotron -->
  <div id="about" class="jumbotron">
    <div class="container">
      <div class="row">
        <div class=" col-md-8 col-md-offset-2 text-center">
        <h2>A Propos</h2>
          <hr>
        <p class="lead">
          Je m'appelle Kévin - Actuellement en formation developpeur web & web mobile.
        </p>
        <p>
          Passionné par l'informatique je me suis d'abord orienter vers technicien assistant informatique pour ensuite m'orienter vers le developpement web & web mobile.
          </p>
        <img src="./assets/apropos.png" alt="BOUCHEZ Kévin" class="center-block img-responsive img-circle"/>
        <!-- <img src="./assets/download.svg" id="donwload" alt="Edd Yerburgh" class="center-block img-responsive img-circle"/> -->
          <a href="/Portfolio/assets/cvbouchezkevin.pdf" download><button class="btndownload"><img id="my-img" src="./assets/download.png" onmouseover="hover(this);" onmouseout="unhover(this);" class="center-block img-responsive img-circle"/></button><img src="/assets/cvbouchezkevin.pdf" alt=""></a>
        </div> <!-- .col-md-8 -->
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- #about -->  
  <div id="portfolio" class="jumbotron background-primary text-inverse">
    <div class="container">
      <div class="row">
        <h2 class="text-center">Portfolio</h2>
        <hr>
        <div class="col-xs-6 col-md-3">
          <a class="thumbnail" page="avoriaz">
             <svg aria-hidden="true" class="thumbnail-svg" data-prefix="fas" data-icon="vial" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-vial fa-w-15 fa-3x"><path fill="currentColor"  class=""><img src="./assets/test.svg" class="center"></path></svg>
              <div class="thumbnail-overlay" page="avoriaz">
                <span class="glyphicon text-inverse center "> Exercices</span>
              </div>
          </a>
        </div> <!-- .col-md-3 -->
        <div class="col-xs-6 col-md-3">
          <a class="thumbnail" page="vue-test-utils">
            <svg aria-hidden="true" class="thumbnail-svg" data-prefix="fab" data-icon="vuejs" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-vuejs fa-w-14 fa-3x"><path fill="currentColor" class=""><img src="./assets/projet.svg" class="center"></path></svg>
            <div class="thumbnail-overlay" page="vue-test-utils">
              <span class="glyphicon text-inverse large center">Projets</span>
            </div>
          </a>
        </div> <!-- .col-md-3 -->
        <div class="col-xs-6 col-md-3">
          <a class="thumbnail" page="book">
            <svg aria-hidden="true" class="thumbnail-svg" data-prefix="fas" data-icon="book" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-book fa-w-14 fa-3x"><path fill="currentColor"  class=""></path><img src="./assets/stages.svg" class="center"></svg>
            <div class="thumbnail-overlay" page="book">
              <span class="glyphicon text-inverse large center">Stage</span>
            </div>            
          </a>
        </div> <!-- .col-md-3 -->
        <div class="col-xs-6 col-md-3">
          <a class="thumbnail" page="blog">
            <svg class="thumbnail-svg" aria-hidden="true" data-prefix="fas" data-icon="rss" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-rss fa-w-14 fa-3x"><path fill="currentColor"  class=""></path><img src="./assets/perso.svg" class="center"></svg>
            <div class="thumbnail-overlay" page="blog">
              <span class="glyphicon text-inverse large center">Perso</span>
            </div>            
          </a>
        </div> <!-- .col-md-3 -->        
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- #portfolio -->
  <div id="contact" class="jumbotron">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="">Contactez–Moi</h2>
        <hr>
        <form action="./galerie/mail.php"  enctype="text/plain" method="post">
        <div class="form-group">
          <label for="InputEmail">Adresse Mail</label>
          <input type="email" class="form-control" id="InputEmail" placeholder="Email">
        </div> <!-- .form-group -->
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" class="form-control" rows="3"></textarea>
        </div> <!-- .form-group -->
        <input type="submit" name="submit" class="btn btn-inverse">
      </form>
      </div> <!-- .col-md-8 -->
    </div> <!-- .container -->
  </div> <!-- #contact -->

<div class="text-center text-inverse navbar-inverse">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-4">
            <h3>Localisation</h3>
                <a class="glyphicon glyphicon-map-marker medium" href="https://www.google.com/maps/place/Dunkerque/@51.0343684,2.2367006,11z/data=!4m5!3m4!1s0x47dc8b6dd9ff20b9:0x40af13e81646da0!8m2!3d51.0343684!4d2.3767763" target="newwindow"></a>
        </div> <!-- .footer-col -->
        <div class="footer-col col-md-4">
            <h3>Mes réseaux</h3>
            <ul class="list-inline">
              <li>
                   <a class="medium" href="https://www.facebook.com/kevin.crazybirds/" target="newwindow"><span class="fui-facebook"></span></a>
              </li>
              <li>
                  <a class="medium" href="https://github.com/KevinBouchez/DWWM_KB" target="newwindow"><span class="fui-github"></span></a>
              </li>
              <li>
                  <a class="medium" href="https://www.instagram.com/pouap59/" target="newwindow"><span class="fui-instagram"></span></a></a>
              </li>
            </ul>
        </div> <!-- .footer-col -->
        <div class="footer-col col-md-4">
            <h3>Engagez moi</h3>
            <p>Je suis disponible pour des missions</p>
        </div> <!-- .footer-col -->
      </div> <!-- .row -->
    </div> <!-- .container --> 
    <div class="background-secondary">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             Copyright © Bouchez Kévin 2022
          </div> <!-- .col-lg-12 -->
        </div> <!-- .row -->
      </div> <!-- .container  -->
    </div> <!-- .background-secondary -->
  </div> <!--  -->
<div id="avoriaz" class="full-screen">
  <div class="container">
      <div class="col-md-6 text-center center">
      <div class="row">
      </div> <!-- .row -->           
        <p class="lead">Exercices effectuer.</p>
      <hr>
      <div class="row">
        <div class="col-md-3 col-md-offset-3">
          <a class="btn-inverse btn-block btn-lg" target="_blank" href="./galerie/exercices.php">Voir</a>
        </div> <!-- .col-md-6 -->
        <div class="col-md-3">
          <a class="btn-danger btn-lg close-window btn-block">Fermer</a>
        </div> <!-- .col-md-6 -->        
      </div> <!-- .row -->      
    </div> <!-- .col-md-6 -->
  </div> <!-- .container -->
</div> <!-- .full-screen -->
<div id="vue-test-utils" class="full-screen">
  <div class="container">
    <div class="col-md-6 text-center center">
      <div class="row">
      </div> <!-- .row -->       
      <p class="lead">
        Projets Effectuer.
      </p>
      <p>
        Voici les projets effectuer en groupe.
      </p>
      <hr>
      <div class="row">
        <div class="col-md-3 col-md-offset-3">
          <a class="btn-inverse btn-block btn-lg" target="newwindow" href="./galerie/projets.php">Voir</a>
        </div> <!-- .col-md-6 -->
        <div class="col-md-3">
          <a class="btn-danger btn-lg close-window btn-block">Fermer</a>
        </div> <!-- .col-md-6 -->        
      </div> <!-- .row -->      
    </div> <!-- .col-md-6 -->
  </div> <!-- .container -->
</div> <!-- .full-screen -->
<div id="book" class="full-screen">
  <div class="container">
    <div class="col-md-6 text-center center">
      <div class="row">
      </div> <!-- .row -->          
      <p class="lead">Site Effectuer En Stage.</p>
      <p>
       Voici le site que j'ai fait pendant mon stage.</p>
      <hr>
      <div class="row">
        <div class="col-md-3 col-md-offset-3">
          <a class="btn-inverse btn-block btn-lg" target="_blank" href="./galerie/stage.php">Voir</a>
        </div> <!-- .col-md-6 -->
        <div class="col-md-3">
          <a class="btn-danger btn-lg close-window btn-block">Fermer</a>
        </div> <!-- .col-md-6 -->        
      </div> <!-- .row -->
    </div> <!-- .col-md-6 -->
  </div> <!-- .container -->
</div> <!-- .full-screen -->
<div id="blog" class="full-screen">
  <div class="container">
    <div class="col-md-6 text-center center">
      <div class="row">
      </div> <!-- .row -->
      <p class="lead">
        Site que j'ai fait personnellement.
      </p>
      <p>
        J'ai fait ceci lorsque j'avais le temps.
      </p>
      <hr>
      <div class="row">
        <div class="col-md-3 col-md-offset-3">
          <a class="btn-inverse btn-block btn-lg" target="_blank" href="./galerie/perso.php">Voir</a>
        </div> <!-- .col-md-6 -->
        <div class="col-md-3">
          <a class="btn-danger btn-lg close-window btn-block">Fermer</a>
        </div> <!-- .col-md-6 -->        
      </div> <!-- .row -->
    </div> <!-- .col-md-6 -->
  </div> <!-- .container -->
</div> <!-- .full-screen -->
</main>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
