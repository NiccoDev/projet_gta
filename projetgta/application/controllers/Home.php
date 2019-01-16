<?php

include ('../models/Salarie_model.php');
include ('../connexionbdd.php');

if (isset($_POST['action']) && $_POST['action'] == 'Valider') {

    //récupérer le salarié par son login
    $salarie = recuperer_salarie($_POST['login'], $bdd);

    //est ce que j'ai récupérer un salarié
    //vérifier si la variable contient quelque chose
    if ($salarie) {
        //vérifier le mdp
        //Comparaison du mdp envoyé via le formulaire avec la base
        $isPwdCorrect = password_verify($_POST['mdp'], $salarie['mdp_salarie']);
        $niveauSalarie = $salarie['id_niveau_salarie'];

        if ($isPwdCorrect) {
            //je lance la conservation de la session de l'utilisateur qui a réussi la connection
            session_start();
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['mdp'] = $_POST['mdp'];
            echo 'Vous êtes connecté';
            if ($niveauSalarie <= 2) {
                header('location:salarie.php');
            } else {
                header('location:admin.php');
            }
        } else {
            echo 'Mauvais identifiant ou mot de passe';
        }
    } else {
        echo 'Mauvais identifiant ou mot de passe';
    }
}

