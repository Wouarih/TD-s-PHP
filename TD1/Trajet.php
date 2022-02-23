<?php

class Trajet{

    private $id;
    private $depart;
    private $arrive;
    private $date;
    private $nbplace;
    private $prix;
    private $conducteur_login;

    /**
     * @param $id
     * @param $depart
     * @param $arrive
     * @param $date
     * @param $nbplace
     * @param $prix
     * @param $conducteur_login
     */


    public function get($nom_attribut){
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    public function set($nom_attribut, $valeur){
        if (property_exists($this, $nom_attribut))
            $this->nom_attribut = $valeur;
        return false;
    }

    public function __construct(){
        if (!empty($data)){
            $this->id=$data["id"];
            $this->depart=$data["depart"];
            $this->arrive=$data["arrive"];
            $this->date=$data["date"];
            $this->nbplaces=$data["nbplaces"];
            $this->prix=$data["prix"];
            $this->conducteur_login=$data["conducteur-login"];
    }
}

public function afficher(){
        echo "<p> Ce trajet du {$this->date} partira de {$this->depart} pour aller à {$this->arrive}.";
}




}
