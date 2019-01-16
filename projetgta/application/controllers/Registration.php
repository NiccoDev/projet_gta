<?php

include ('../models/Registration_model.php');
include ('../connexionbdd.php');

if (isset($_POST['action']) && $_POST['action'] == 'Valider') {
    
    $mdp = GenerateMDP::generate();
    $resultat = insert($_POST, $mdp, $bdd);
    $envoi_mail = sendMail($_POST['email'], $mdp);

    if ($resultat == true) {
        echo " enregistrement ok";
    }
}

$liste_villes = recuperer_villes($bdd);

$liste_poles = recuperer_poles($bdd);

$liste_niveaux = recuperer_niveaux($bdd);

