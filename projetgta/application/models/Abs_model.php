<?php

function insert_abs($param, $bdd) {
    
    //Requête pour insérer le contenu dans une table
    $requete = $bdd->prepare(
            'INSERT INTO absences(abs_debut,abs_fin,abs_duree,id_statut_abs,id_motif_abs,id_salarie,abs_cre_dt)'
            . 'VALUES(?,?,?,?,?,?,NOW())'
    );

    //Excécution de la requête
    $requete->execute(array(
        $param['absDebut'],
        $param['absFin'],
        $param['absDuree'],
        $param[''],
        $param['motifAbs'],
        $param['']
    ));
    
    return true;
}
