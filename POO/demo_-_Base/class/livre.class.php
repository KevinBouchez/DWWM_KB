<?php

    class Livre{

        private $titre;
        private $nom;
        private $prenom;
        private $prix;

        //construction
        function __construct($img,$titre,$nom,$prenom,$prix){
            $this->img = $img;
            $this->titre = $titre;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->prix = $prix;
        }

        // Getter
        public function getImg(){return $this->img;}
        public function getTitre(){return $this->titre;}
        public function getNom(){return $this->nom;}
        public function getPrenom(){return $this->prenom;}
        public function getPrix(){return $this->prix;}

        // Setter
        public function setImg($img){return $this->img=$img;}
        public function setTitre($titre){return $this->titre=$titre;}
        public function setNom($nom){return $this->nom=$nom;}
        public function setPrenom($prenom){return $this->prenom=$prenom;}
        public function setPrix($prix){return $this->prix=$prix;}

        //Affichage Objet
        public function afficherInformationLivre(){
        echo "<b>Titre du livre : " . $this->titre . "<br/>";
        echo "<b>Nom de l'auteur : " . $this->nom . "<br/>";
        echo "<b>Prenom de l'auteur : " . $this->prenom . "<br/>";
        echo "<b>Prix du livre : " . $this->prix . "<br/>"."<br/>";
        }
            
        // Methode afficher image
        public function afficherImageLivre(){
            echo "<div class='gauche'>";
            echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
            echo "</div>";
            echo "<div class='gauche'>";

            // Appeler une fonction dans une fonction
                $this->afficherInformationLivre();
                echo "</div>";
                echo "<div class='clearB'></div>";
        }
        
    }

?>