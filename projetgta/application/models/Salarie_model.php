<?php

//Récupération de l'utilisateur et de son pass hashé
function recuperer_salarie($login, $bdd) {
    $requete = $bdd->prepare('SELECT * FROM salaries WHERE login_salarie = ?');
    $requete->execute(array($login));

    return $requete->fetchAll();
}

function getAll($bdd) {
    $requete = $bdd->prepare('SELECT * FROM salaries WHERE id_niveau_salarie = 1');
    $requete->execute();

    return $requete->fetchAll();
}

function getOne($idSalarie, $bdd) {
    $requete = $bdd->prepare('SELECT * FROM salaries WHERE id_salarie = ?');
    $requete->execute(array($idSalarie));

    return $requete->fetch();
}

function deleteOne($idSalarie, $bdd) {
    $requete = $bdd->prepare('DELETE FROM salaries WHERE id_salarie = ?');
    $requete->execute(array($idSalarie));

    return 'ok';
}

function update_salarie($param, $bdd, $idSalarie) {

    $requete = $bdd->prepare('UPDATE salaries '
            . 'SET nom_salarie = ?, prenom_salarie = ?, adresse_salarie = ?, id_ville = ?, salarie_modif_dt = NOW()'
            . 'WHERE id_salarie = ?');
    //Excécution de la requête
    $requete->execute(array(
        $param['nomSalarie'],
        $param['prenomSalarie'],
        $param['adresseSalarie'],
        $param['ville'],
        $idSalarie
    ));

    return true;
}
