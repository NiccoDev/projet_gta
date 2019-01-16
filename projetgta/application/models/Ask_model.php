<?php

function insert($param, $bdd) {
    
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



//function sendMail($mail) {
//    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) { // On filtre les serveurs qui rencontrent des bogues.
//        $passage_ligne = "\r\n";
//    } else {
//        $passage_ligne = "\n";
//    }
//    //Déclaration des messages au format texte et au format HTML.
//    $message_txt = "Bonjour, nous vous confirmons votre demande d'absences :"
//            . "du : $mail et mot de passe : ";
//    $message_html = "<html><head></head><body><b>Bonjour</b>, voici votre identifiant et votre mot de passe pour vous connectez au portail des absences."
//            . "<p>login : $mail</p><p>mot de passe : </p></body></html>";
//
//    //Création de la boundary (frontière) qui sert à séparer les parties de l'email
//    $boundary = "-----=" . md5(rand());
//
//    //Définition du sujet.
//    $sujet = "Demande d'absence";
//
//    //Création du header de l'e-mail.
//    $header = "From: \"Admin\"<ndelenclos.dev@gmail.com>" . $passage_ligne;
//    $header .= "Reply-to: \"Contact\" <ndelenclos.dev@gmail.com>" . $passage_ligne;
//    $header .= "MIME-Version: 1.0" . $passage_ligne;
//    $header .= "X-Priority :3" . $passage_ligne;
//    $header .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
//
//    //Création du message.
//    $message = $passage_ligne . "--" . $boundary . $passage_ligne;
//
//    //Ajout du message au format texte.
//    $message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
//    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
//    $message .= $passage_ligne . $message_txt . $passage_ligne;
//    $message .= $passage_ligne . "--" . $boundary . $passage_ligne;
//
//    //Ajout du message au format HTML
//    $message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
//    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
//    $message .= $passage_ligne . $message_html . $passage_ligne;
//    $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
//    $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
//
//    //Envoi de l'e-mail.
//    mail($mail, $sujet, $message, $header);
//}
