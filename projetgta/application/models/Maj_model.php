<?php

function update_salarie($param, $bdd, $idSalarie) {

    $requete = $bdd->prepare('UPDATE salaries '
            . 'SET adresse_salarie = ?, id_ville = ?, id_pole = ?, id_niveau_salarie = ?, salarie_modif_dt = NOW()'
            . 'WHERE id_salarie = ?');
    //Excécution de la requête
    $requete->execute(array(
        $param['adresseSalarie'],
        $param['ville'],
        $param['pole'],
        $param['niveau'],
        $idSalarie
    ));

    return true;
}

function recuperer_salaries($bdd) {

    return $bdd->query('SELECT * FROM salaries');
}

function recuperer_villes($bdd) {

    return $bdd->query('SELECT * FROM villes');
}

function recuperer_poles($bdd) {

    return $bdd->query('SELECT * FROM poles');
}

function recuperer_niveaux($bdd) {

    return $bdd->query('SELECT * FROM niveaux_salarie');
}
