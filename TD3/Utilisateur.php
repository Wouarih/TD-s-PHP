<?php

class Utilisateur{

    private $login;
    private $nom;
    private $prenom;

    /**
     * @param $login
     * @param $nom
     * @param $prenom
     */

    public function __construct($login, $nom, $prenom)
    {
        $this->login = $login;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function afficher(){
        echo "<p> Utilisateur {$this->prenom} {$this->nom} de login {$this->login}</p>";
    }



}


?>
