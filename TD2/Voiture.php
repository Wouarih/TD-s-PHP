<?php
   
class Voiture {
   
    private $marque;
    private $couleur;
    private $immatriculation;
   
    // Getters      
    public function getMarque() {
        return $this->marque;
    }
   
    //Setters 
    public function setMarque($m) {
        $this->marque = $m;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($c){
    	$this->couleur = $c;
    }

     public function getImmatriculation() {
        return $this->immatriculation;
    }

      public function setImmatriculation($i){
    	$this->couleur = $i;
    }

   
    // un constructeur
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if(!is_null($m) && !is_null($c) && !is_null($i)) {
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    } 
              
    // une methode d'affichage.
    public function afficher() {
      echo "<p>La $this->marque immatriculé $this->immatriculation est de couleur $this->couleur</p>";
    }
}
?>