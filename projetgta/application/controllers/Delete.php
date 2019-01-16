<?php

include ('../models/Delete_model.php');
include ('../connexionbdd.php');


if (isset($_POST['action']) && $_POST['action'] == 'Valider') {
    $resultat = delete($bdd, $_POST['name']);

    if ($resultat == true) {
        echo "suppression ok";
    }
}

$liste_salaries = recuperer_salaries($bdd);
