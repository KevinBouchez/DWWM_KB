<?php

    class Personnage{

        private $nom;
        private $classe;
        private $level;
        private $sexe;

        //construction
        function __construct($nom,$img,$classe,$level,$sexe){
            $this->nom = $nom;
            $this->img = $img;
            $this->classe = $classe;
            $this->level = $level;
            $this->sexe = $sexe;
        }
        // Getter
        public function getImg(){return $this->nom;}
        public function getNom(){return $this->img;}
        public function getClasse(){return $this->classe;}
        public function getLevel(){return $this->level;}
        public function getSexe(){return $this->sexe;}

        // Setter
        public function setImg($img){return $this->img=$img;}
        public function setNom($nom){return $this->nom=$nom;}
        public function setClasse($classe){return $this->classe=$classe;}
        public function setLevel($level){return $this->level=$level;}
        public function setSexe($sexe){return $this->sexe=$sexe;}

        //Affichage Objet
        public function afficherInfo(){
            echo "<b>Nom : " . $this->nom . "<br/>";
            echo "<b>Classe : " . $this->classe . "<br/>";
            echo "<b>Level : " . $this->level . "<br/>";

            if($this->sexe){
                echo "Homme <br/>";
            }else{
                echo "Femme <br/>";
            }
        }
        public function afficherImage(){
            echo "<div class='gauche'>";
            echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
            echo "</div>";
            echo "<div class='gauche'>";
            
                $this->afficherInfo();
                echo "</div>";
                echo "<div class='clearB'></div>";
        }
    }
    
?>