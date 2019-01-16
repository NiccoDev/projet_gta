<?php

include ('../models/Maj_model.php');
include ('../connexionbdd.php');


if (isset($_POST['action']) && $_POST['action'] == 'Valider') {
    $resultat = update_salarie($_POST, $bdd, $_POST['name']);

    if ($resultat == true) {
        echo "mis à jour ok";
    }
}

$liste_salaries = recuperer_salaries($bdd);

$liste_villes = recuperer_villes($bdd);

$liste_poles = recuperer_poles($bdd);

$liste_niveaux = recuperer_niveaux($bdd);
