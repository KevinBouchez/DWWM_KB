<?php

class Fruits{ 

    private $nomFruit;
    private $poids;
    private $prix;

    const POMME = "pomme";
    const CERISE = "cerise";

    const POMMEIMG = "apple.png";
    const CERISEIMG = "cherry.png";


    //Je ne mets pas le prix dans le constructeur, on va le déterminer en fonction du fruit
    public function __construct($nomFruit,$poids){
        $this->nomFruit = $nomFruit;
        $this->poids = $poids;

        //On détermine le prix en fonction du fruit
        $this->prix =$this->getPrixFruit($nomFruit);
    }

    //cette méthode va retourner le prix d'un fruit
    private function getPrixFruit($nomFruit){
        if($nomFruit === self::POMME){
            return 20;
        }elseif ($nomFruit === self::CERISE){
            return 15;
        }

    }

    //Méthode pour afficher l'image
    private function getAffichageImg(){
        if($this->nomFruit === self::POMME){
            return "<img src = 'sources/images/". self::POMMEIMG ." 'alt='image pomme'/> <br/>";
        }elseif($this->nomFruit === self::CERISE){
            return "<img src = 'sources/images/". self::CERISEIMG ." 'alt='image cerise'/> <br/>";
        }

    }

    //Méthode magique pour l'affichage
    public function __toString(){
        $affichage = $this->getAffichageImg();
        $affichage .= "Nom : ". $this->nomFruit . "<br/>";
        $affichage .= "Poids : ". $this->poids . "<br/>";
        $affichage .= "Prix : ". $this->prix . "<br/>";

        return $affichage;

    }

}

?>