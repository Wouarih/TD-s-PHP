<?php

require_once 'Model.php';
require_once 'Trajet.php';

class Utilisateur {

    private $login;
    private $nom;
    private $prenom;

    // Getter générique (pas expliqué en TD)
    public function get($nom_attribut) {
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    // Setter générique (pas expliqué en TD)
    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }

    // un constructeur
    public function __construct($login = NULL, $nom = NULL, $prenom = NULL) {
        if (!is_null($login) && !is_null($nom) && !is_null($prenom)) {
            $this->login = $login;
            $this->nom = $nom;
            $this->prenom = $prenom;
        }
    }

    // une methode d'affichage.
    public function afficher() {
        echo nl2br("Utilisateur {$this->prenom} {$this->nom} de login {$this->login} \n");
    }

    /*public static function getAllUtilisateurs() {
        try {
            $pdo = Model::$pdo;
            $sql = "SELECT * from utilisateur";
            $rep = $pdo->query($sql);
            $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
            return $rep->fetchAll();
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }*/

    public static function findTrajets($login){
        $sql ="SELECT date, depart, arrivee
                FROM trajet
                INNER JOIN passager ON passager.trajet_id = trajet.id
                WHERE passager.utilisateur_login = :login";

        $req_prep = Model::getPDO()->prepare($sql);
        $values = array(
            "login" => $login,
        );
        $req_prep->execute($values);

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
        $tab_trajet = $req_prep->fetchAll();
        foreach($tab_trajet as $key){
            $key -> afficher();
        }
        if (empty($tab_trajet))
            return false;
        return $tab_trajet;
    }
}
