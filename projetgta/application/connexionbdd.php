<?php

error_reporting( E_ALL );
ini_set('display_errors', 1);

//Connection à la base de données avec un try catch pour éviter d'afficher le mdp
try {
    $bdd = new PDO('mysql:host=localhost:8889;dbname=projetGTWMU;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    //Si il y a une erreur on tue le programme
    die('Erreur' . $e->getMessage());
}
