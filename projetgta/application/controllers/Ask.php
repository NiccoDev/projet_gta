<?php

include ('../models/Ask_model.php');
include ('../connexionbdd.php');

if (isset($_POST['action']) && $_POST['action'] == 'Valider') {

    $resultat = insert($_POST, $mdp, $bdd);
    $envoi_mail = sendMail($_POST['absDebut'],$_POST['absFin']);

    if ($resultat == true) {
        echo "demande envoyé";
    }
}

