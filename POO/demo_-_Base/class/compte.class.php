<?php

    class Comptes{

        private $somme;
        private $taux;
        private $depot;

        private static $compte = [];

        const TAUX = 10;

        //construction
        function __construct($img,$somme,$taux,$depot){
            $this->img = $img;
            $this->somme = $somme;
            $this->taux = $taux;
            $this->depot = $depot;


            self::$compte[] = $this;
        }

        // Getter
        public function getImg(){return $this->img;}
        public function getSomme(){return $this->somme;}
        public function getTaux(){return $this->taux;}
        public function getDepot(){return $this->depot;}

        // Setter
        public function setImg($img){return $this->img=$img;}
        public function setSomme($somme){return $this->somme=$somme;}
        public function setTaux($taux){return $this->taux=$taux;}
        public function setDepot($depot){return $this->depot=$depot;}

        public function retrait(){
            return $this->depot - $this->taux . " €". "<br/>";
        }
        public function interets(){
            echo "Interets : ".$this->taux * $this->somme / 100 . " €"."<br/>";
        }
        public function afficherInformation(){
            echo "<b>Sommes : " . $this->somme . " €" . "<br/>";
            echo "<b>Taux : " . $this->taux . " %" . "<br/>";
        }
        
        // Methode afficher image
        public function afficherImageBanque(){
            echo "<div class='gauche'>";
            echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
            echo "</div>";
        $this->afficherInformation();
        $this->interets();
        $this->retrait();
        }

        public static function listComptes(){
            return self::$compte;
        }    
}

?>