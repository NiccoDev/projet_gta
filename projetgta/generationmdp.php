<?php

class GeneratePWD {

    public static function generate() {
        // les valeurs suivantes peuvent être modifiées selon le besoin
        $l = 8; // longueur du mot de passe
        $c = 1; // nombre de lettre capitale
        $n = 1; // nombre de chiffre
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

$mdp = GeneratePWD::generate();
$mdp_crypt = hash('sha1', $mdp);
echo $mdp;



//Génération d'une chaine aléatoire
//function chaine_aleatoire($nb_car, $chaine = "ABCDEFGHIJQLMNOPQRSTUVWXYZabcdefghijqlmnopqrstuvwxyz0123456789") {
//    $nb_lettres = strlen($chaine) - 1;
//    $generation = '';
//    for ($i = 0; $i < $nb_car; $i++) {
//        $pos = mt_rand(0, $nb_lettres);
//        $car = $chaine[$pos];
//        $generation .= $car;
//    }
//    return $generation;
//}
//
//echo chaine_aleatoire(8);
//function random($car) {
//    $string = "";
//    $chaine = "ABCDEFGHIJQLMNOPQRSTUVWXYZabcdefghijqlmnopqrstuvwxyz0123456789";
//    srand((double) microtime() * 1000000);
//    for ($i = 0; $i < $car; $i++) {
//        $string .= $chaine[rand() % strlen($chaine)];
//    }
//    return $string;
//}
//
//$mdp = random(8);
//$mdp_crypt = hash('sha1', $mdp);
//echo $mdp;