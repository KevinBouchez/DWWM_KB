<?php

    class Personnage{

        private static $personnages = [];

            private $nom;
            private $img;
            private $age;

            const HOMME =true;
            const FEMME = false;

            const FORCE_MAX = 6;
            const FORCE_MED = 5;
            const FORCE_MIN = 4;

            const AGILITE_MAX = 5;
            const AGILITE_MED = 3;
            const AGILITE_MIN = 2;

            //Constructeur
            public function __construct($name,$img,$age,$sexe,$force,$agilite){
                $this->nom = $name;
                $this->img= $img;
                $this->age= $age;
                $this->sexe= $sexe;
                $this->force= $force;
                $this->agilite= $agilite;

                self::$personnages[] = $this;  
            }
            public function getNom(){return $this->nom;}
            public function getImg(){return $this->img;}
            public function getAge(){return $this->age;}
            public function getSexe(){return $this->sexe;}
            public function getForce(){return $this->force;}
            public function getAgilite(){return $this->agilite;}


            public function setNom($nom){$this->nom = $nom;}
            public function setImg($img){$this->img = $img;}
            public function setAge($age){$this->age = $age;}
            public function setSexe($sexe){$this->sexe = $sexe;}
            public function setForce($force){$this->force = $force;}
            public function setAgilite($agilite){$this->agilite = $agilite;}


        //Méthode pour afficher les informations de l'objet
        public function afficherInfo(){
            //$this fait référence à l'objet lui même
            //Chacun des objets est capable d'afficher ses informations
            echo "<b>Nom : </b>" . $this->nom . "<br/>";
            echo "<b>Age :  </b>" . $this->age . "<br/>";

            //Si c'est vrai on affiche la valeur homme sinon la valeur femme
            if($this->sexe){
                echo "Homme <br/>";
            }else{
                echo "Femme <br/>";
            }
            echo "<b>Force :  </b>" . $this->force . "<br/>";
            echo "<b>Agilite :  </b>" . $this->agilite . "<br/>";
        }

        //Méthode pour afficher les images
        public function afficherImage(){
            echo "<div class='gauche'>";
                echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
            echo "</div>";
            echo "<div class='gauche'>";
                //Pour appeler une fonction dans une fonction
                $this->afficherInfo();
            echo "</div>";
            echo "<div class='clearB'></div>";
        }
        public static function listPersonnage(){
            return self::$personnages;
        }
    }
?>