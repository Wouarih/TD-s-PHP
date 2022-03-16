<?php

//Requestionnez le prof sur le try and catch

require_once "Model.php";


class ModelVoiture {
   
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
    	$this->immatriculation = $i;
    }

   
    // un constructeur
    public function __construct($m = NULL, $i = NULL, $c = NULL) {
        if(!is_null($m) && !is_null($i) && !is_null($c)) {
            $this->marque = $m;
            $this->immatriculation = $i;
            $this->couleur = $c;
        }
    } 
              
    /*une methode d'affichage.
    public function afficher() {
      echo "<p>La $this->marque immatriculé $this->immatriculation est de couleur $this->couleur</p>";
    }*/

    public static function getAllVoitures(){

        $rep = Model::getPDO()->query("SELECT * FROM voiture");

        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');

        $tab_voit = $rep->fetchAll();

        return $tab_voit;

    }

    /*public static function getAllVoitures()
    {
        $sql ="SELECT * FROM voiture";

        $req_prep = Model::getPDO()->prepare($sql);


        $req_prep->execute();

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_v = $req_prep->fetchAll();

        foreach($tab_v as $key => $item){
            echo "$key : $item";
        }

    }*/

    public static function getVoitureByImmat($immat) {
        $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "nom_tag" => $immat,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
    }

    public function save(){
    $sql = "INSERT INTO voiture VALUES(:nom_im, :nom_mq, :nom_c)";
    $req_prep = Model::getPDO()->prepare($sql);

    $values = array(
        ":nom_im" => $this->immatriculation,
        ":nom_mq" => $this->marque,
        ":nom_c" => $this->couleur,
    );

    $req_prep->execute($values);

}


}
