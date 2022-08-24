<?php

    class Fruits{

        private $fruit;
        private $prix;
        private $poids;

        private static $fruits = [];

        const POIDS_MAX = 5;
        const POIDS_MID = 2;
        const POIDS_MIN = 1;

        //construction
        function __construct($fruit,$img,$prix,$poids){
            $this->img = $img;
            $this->nom = $fruit;
            $this->prix = $prix;
            $this->poids = $poids;

            self::$fruits[] = $this;
        }

        // Getter
        public function getImg(){return $this->img;}
        public function getNom(){return $this->nom;}
        public function getPrix(){return $this->prix;}
        public function getPoids(){return $this->poids;}

        // Setter
        public function setImg($img){return $this->img=$img;}
        public function setNom($fruit){return $this->nom=$fruit;}
        public function setPrix($prix){return $this->prix=$prix;}
        public function setPoids($poids){return $this->poids=$poids;}

        //Affichage Objet
        public function afficherInformation(){
        echo "<b>Nom du fruit : " . $this->nom . "<br/>";
        echo "<b>Poids de la barquette de fruits : " . $this->poids . "<br/>";
        echo "<b>Prix du fruit : " . $this->prix . "<br/>";
        }
            
        // Methode afficher image
        public function afficherImageFruit(){
            echo "<div class='gauche'>";
            echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
            echo "</div>";
            echo "<div class='gauche'>";

            // Appeler une fonction dans une fonction
                $this->afficherInformation();
                echo "</div>";
                echo "<div class='clearB'></div>";
        }

        public static function listFruits(){
            return self::$fruits;
        }
    }

?>