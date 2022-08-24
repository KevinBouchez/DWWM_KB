<?php

    class Batiment{

        protected $batiment;
        protected $batimentAdresse;

        protected static $attribut = [];

        const BATIMENT = "Batiment";
        const MAISON = "Maison";
        const BATIMENTIMG = "batiment.png";

        //construction
        function __construct($batiment,$batimentAdresse){
            $this->batiment = $batiment;
            $this->batimentAdresse = $batimentAdresse;

            self::$attribut[] = $this;
        }

        // Getter
        public function getBatiment(){return $this->batiment;}
        public function getBatimentAdresse(){return $this->batimentAdresse;}

        // Setter
        public function setBatiment($batiment){return $this->batiment=$batiment;}
        public function setBatimentAdresse($batimentAdresse){return $this->batimentAdresse=$batimentAdresse;}

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
            $batiment = $this->getAffichageImg();
            $batiment .= "Batiment : ". $this->batiment . "<br/>";
            $batiment .= "Adresse : ". $this->batimentAdresse . "<br/>";

            return $batiment;

        }
}

?>