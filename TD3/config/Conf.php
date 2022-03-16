<?php
class Conf {

    static private $databases = array(
        // Le nom d'hote est webinfo a l'IUT
        //'hostname' => 'webinfo',
        // ou localhost sur votre machine
        'hostname' => 'localhost',
        // A l'IUT, vous avez une BDD nommee comme votre login
        //'database' => 'oiryc',
        // Sur votre machine, vous devrez creer une BDD
        'database' => 'tdphp',
        // A l'IUT, c'est votre login
        //'login' => 'oiryc',
        // Sur votre machine, vous avez surement un compte 'root'
        'login' => 'root',
        // A l'IUT, c'est votre mdp (INE par defaut)
        //'password' => 'iutmontpellier'
        // Sur votre machine personelle, vous avez creez ce mdp a l'installation
        'password' => 'root'
    );

    static public function getLogin() {
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['login'];
    }

    static public function getHostname(){
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['hostname'];
    }

    static public function getDatabase(){
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['database'];
    }
    static public function getPassword(){
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['password'];
    }
}
