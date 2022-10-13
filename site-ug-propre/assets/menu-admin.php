<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="../images/favicon.png" type="">

  <title> Urban Gravity Evenement </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/event.css">
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>

<body class="subbb_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="../images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Urban Gravity - Admin
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Accueil </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./menu-admin.php">Evenements <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php">A Propos</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="./connexion.php" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="./panier.php">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                </svg>
              </a>
              <a href="./book.php" class="order_online">
                Boutique
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->
  <section class="event">
        <a href="add-event-admin.php" class="link">Ajouter un evenement</a>
        <?php
            //inclure la page de connexion
            include_once "database.php";
            //afficher la liste des photos qui sont dans la base de donnée
            $req = mysqli_query($con , "SELECT * FROM images");

            //verifier que la liste n'est pas vide
            if(mysqli_num_rows($req) < 1){
                ?>
                <p class="vide_message">La liste des photos est vide.</p>
                <?php
            }

            //afficher la liste des photos
            while($row = mysqli_fetch_assoc($req)){
                ?>         
                    <div class="box">
                        <img  class="img_principal" src="image_bdd/<?=$row['img']?>">
                        <div><?=$row['txt']?></div>
                        <div><?=$row['date']?></div>
                        <a class="delete_btn" href="delete.php?id=<?=$row['id']?>">
                            <img src="remove.png">
                        </a>
                    </div>
                <?php
            }
        ?>
    </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contacter Nous
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  urban-gravity@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Urban Gravity
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="https://www.facebook.com/UrbanGravity59/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/urbangravitydk/?hl=fr">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Horraire De Salle
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am - 10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> 2022
          <a href="https://themewagon.com/" target="_blank">Kevin Bouchez, Thomas Ingelaere</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>

<?php 
    //inclure la page de connexion
    include_once "database.php";
    //verifier que les données sont envoyés
    if(isset($_POST['send'])){
        //verifiez que l'image et le texte ont été choisies
        if(!empty($_FILES['image']) && isset($_POST['text']) && $_POST['text']!= ""){
            
            //On récupère d'abord le nom de l'image
            $img_nom = $_FILES['image']['name'];

            //Nous définissons un nom temporaire
            $tmp_nom = $_FILES['image']['tmp_name'];

            //On récupère l'heure actuelle
            $time = time();

            //On rennomme l'image en utilisant cette formule : heure + nom de l'image (Pour avoir des images uniques)
            $nouveau_nom_img = $time.$img_nom ;

            //on déplace l'image dans un dossier appellé "image_bdd"
            $deplacer_img = move_uploaded_file($tmp_nom,"image_bdd/".$nouveau_nom_img);

            if($deplacer_img){
                //si l'image a été mis dans le dossier 
                //insérons le texte et le nom de l'image dans la base de données
                $text = $_POST['text'] ;
                $date = $_POST['date'] ;
                $req = mysqli_query($con , "INSERT INTO images VALUES (NULL ,'$nouveau_nom_img','$text', '$date')");
                //verifier que la requête fonctionne
                if($req){
                    //si oui , faire une redirection vers la page liste.php
                    header("location:liste.php") ;
                }else {
                    //si non
                    $message = "Echec de l'ajout de l'image !";
                }
            }else {
                //si non
                $message = "Veuillez choisir une image avec une taille inférieur à 1Mo !";
            }

        }else {
            //si les champs sont vides on affiche un message
            $message = "Veuillez remplir tous les champs !";
        }
    }


?>