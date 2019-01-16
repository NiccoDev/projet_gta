<?php

function insert($param, $mdp, $bdd) {
    $mdp_crypt = password_hash($mdp, PASSWORD_BCRYPT);
    
    //Requête pour insérer le contenu dans une table
    $requete = $bdd->prepare(
            'INSERT INTO salaries(nom_salarie,prenom_salarie,adresse_salarie,id_ville,login_salarie,id_pole,id_niveau_salarie,salarie_crea_dt,mdp_salarie)'
            . 'VALUES(?,?,?,?,?,?,?,NOW(),"' . $mdp_crypt . '")'
    );

    //Excécution de la requête
    $requete->execute(array(
        $param['name'],
        $param['lastName'],
        $param['adresseSalarie'],
        $param['ville'],
        $param['email'],
        $param['pole'],
        $param['niveau']
    ));
    echo $bdd->lastInsertId();

    return true;
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

function sendMail($mail, $mdp) {
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) { // On filtre les serveurs qui rencontrent des bogues.
        $passage_ligne = "\r\n";
    } else {
        $passage_ligne = "\n";
    }
    //Déclaration des messages au format texte et au format HTML.
    $message_txt = "Bonjour, voici votre identifiant et votre mot de passe pour vous connectez au portail des absences."
            . "login : $mail et mot de passe : $mdp";
    $message_html = "<html><head></head><body><b>Bonjour</b>, voici votre identifiant et votre mot de passe pour vous connectez au portail des absences."
            . "<p>login : $mail</p><p>mot de passe : $mdp</p></body></html>";

    //Création de la boundary (frontière) qui sert à séparer les parties de l'email
    $boundary = "-----=" . md5(rand());

    //Définition du sujet.
    $sujet = "Login et mot de passe";

    //Création du header de l'e-mail.
    $header = "From: \"Admin\"<ndelenclos.dev@gmail.com>" . $passage_ligne;
    $header .= "Reply-to: \"Contact\" <ndelenclos.dev@gmail.com>" . $passage_ligne;
    $header .= "MIME-Version: 1.0" . $passage_ligne;
    $header .= "X-Priority :3" . $passage_ligne;
    $header .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;

    //Création du message.
    $message = $passage_ligne . "--" . $boundary . $passage_ligne;

    //Ajout du message au format texte.
    $message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . $message_txt . $passage_ligne;
    $message .= $passage_ligne . "--" . $boundary . $passage_ligne;

    //Ajout du message au format HTML
    $message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . $message_html . $passage_ligne;
    $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
    $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;

    //Envoi de l'e-mail.
    mail($mail, $sujet, $message, $header);
}

class GenerateMDP {

    public static function generate() {
        // les valeurs suivantes peuvent être modifiées selon le besoin
        $l = 8; // longueur du mot de passe
        $c = 1; // nombre de lettres en majuscule
        $n = 1; // nombre de chiffres
        // liste des valeurs possibles pour chaque type de caractères
        $chars = "abcdefghijklmnopqrstuvwxyz";
        $caps = strtoupper($chars);
        $nums = "0123456789";

        $out = '';
        $out .= self::select($chars, $l - $c - $n); // sélectionne aléatoirement les lettres minuscules
        $out .= self::select($caps, $c); // sélectionne aléatoirement les lettres majuscules
        $out .= self::select($nums, $n); // sélectionne aléatoirement les chiffres
        // Tout est là, on mélange le tout
        return str_shuffle($out);
    }

    private static function select($src, $l) {
        $out = '';
        for ($i = 0; $i < $l; $i++) {
            $out .= substr($src, mt_rand(0, strlen($src) - 1), 1);
        }
        return $out;
    }

}
