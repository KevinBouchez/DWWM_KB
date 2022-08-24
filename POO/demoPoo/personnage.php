<?php 
    // class Personnage{

    //     // public $nom = "Luke";
    //     // public $img = "player.png";
    //     // public $age = 27;
    //     // public $sexe = true;
    //     // public $force = 5;
    //     // public $agilite = 4;

    //     public $nom;
    //     public $img;
    //     public $age;
    //     public $sexe;
    //     public $force;
    //     public $agilite;

    //            //Constructeur
    //            public function __construct($name,$img,$age,$sexe,$force,$agilite){
    //             $this->nom = $name;
    //             $this->img= $img;
    //             $this->age= $age;
    //             $this->sexe= $sexe;
    //             $this->force= $force;
    //             $this->agilite= $agilite;
    
                
    //         }

    //      //Méthode pour afficher les informations de l'objet
    //      public function afficherInfo(){
    //         //$this fait référence à l'objet lui même
    //         //Chacun des objets est capable d'afficher ses informations
    //         echo "<b>Nom : </b>" . $this->nom . "<br/>";
    //         echo "<b>Age :  </b>" . $this->age . "<br/>";

    //         //Si c'est vrai on affiche la valeur homme sinon la valeur femme
    //         if($this->sexe){
    //             echo "Homme <br/>";
    //         }else{
    //             echo "Femme <br/>";
    //         }
    //         echo "<b>Force :  </b>" . $this->force . "<br/>";
    //         echo "<b>Agilite :  </b>" . $this->agilite . "<br/>";
    //     }

    //     //Méthode pour afficher les images
    //     public function afficherImage(){
    //         echo "<div class='gauche'>";
    //             echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
    //         echo "</div>";
    //         echo "<div class='gauche'>";
    //             //Pour appeler une fonction dans une fonction
    //             $this->afficherInfo();
    //         echo "</div>";
    //         echo "<div class='clearB'></div>";

    //  }



    // }

    require_once("classes/personnage.class.php");
    require("common/header.php");
    require("common/menu.php");
   
?>
<h1>Page Personnages</h1>

<?php
//Création d'un personnage
$p1 = new Personnage("Luke","player.png",27,Personnage::HOMME,Personnage::FORCE_MAX,Personnage::AGILITE_MED);
// $p1->afficherImage();

$p2 = new Personnage("Katy","playerF.png",25,Personnage::FEMME,3,6);
// $p2->afficherImage();
// $p2->nom="Titi";
// $p2->setNom("Toto");

// $p2->afficherImage();

// //Affichage des informations
// echo "Nom : ". $p1->nom;

$persos = Personnage::listPersonnage();
foreach($persos as $value){
    $value->afficherImage();
    echo "<br/>*****************************************<br/>";
}


?>
<?php 
    require("common/footer.php");
?>