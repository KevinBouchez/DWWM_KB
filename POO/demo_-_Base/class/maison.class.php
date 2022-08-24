<?php

    class Maison extends Batiment{

        protected $maison;
        protected $maisonAdresse;
        protected $nbPieces;

        protected static $attribut = [];

        const BATIMENT = "Batiment";
        const MAISON = "Maison";
        const BATIMENTIMG = "batiment.png";

        //construction
        function __construct($maison,$maisonAdresse,$nbPieces){
            $this->maison = $maison;
            $this->maisonAdresse = $maisonAdresse;
            $this->nbPieces = $nbPieces;

            self::$attribut[] = $this;
        }        

        // Getter
        public function getMaison(){return $this->maison;}
        public function getMaisonAdresse(){return $this->maisonAdresse;}
        public function getNbPieces(){return $this->nbPieces;}

        // Setter
        public function setMaison($maison){return $this->maison=$maison;}
        public function setMaisonAdresse($maisonAdresse){return $this->maisonAdresse=$maisonAdresse;}
        public function setNbPieces($nbPieces){return $this->nbPieces=$nbPieces;}

        //Méthode pour afficher l'image
        private function getAffichageImg(){
            if($this->batiment === self::BATIMENT){
                return "<img src = 'sources/images/". self::BATIMENTIMG ." 'alt='image batiment'/> <br/>";
            }elseif($this->maison === self::MAISON){
                return "<img src = 'sources/images/". self::BATIMENTIMG ." 'alt='image maison'/> <br/>";
            }

        }   

        // ToString
        public function __toString(){
            $maison = $this->getAffichageImg();
            $maison .= "Maison : ". $this->maison . "<br/>";
            $maison .= "Adresse : ". $this->maisonAdresse . "<br/>";
            $maison .= "Nombre de piece : ". $this->nbPieces . "<br/>";

            return $maison;

        }        

    }
?>