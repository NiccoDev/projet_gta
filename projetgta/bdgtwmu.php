<?php

//Connection à la base de données avec un try catch pour éviter d'afficher le mdp
try {
    $bdd = new PDO('mysql:host=localhost:8889;dbname=projetGTWMU;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    //Si il y a une erreur on tue le programme
    die('Erreur' . $e->getMessage());
}
//Requête pour récupérer le contenu d'une table
$requete = $bdd->prepare('SELECT nom_motif_abs FROM motifs_abs WHERE nom_motif_abs = ?');

//Excécution de la requête
$requete->execute(array($_GET['nom_motif_abs']));

//Boucle sur la requête
while ($donnees = $requete->fetch()) {
    echo '<p>' . $donnees['nom_motif_abs'] . '</p>';
}
?>

<?php

//Connection à la base de données avec un try catch pour éviter d'afficher le mdp
try {
    $bdd = new PDO('mysql:host=localhost:8889;dbname=projetGTWMU;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    //Si il y a une erreur on tue le programme
    die('Erreur' . $e->getMessage());
}
//Requête pour insérer le contenu dans une table
$requete = $bdd->prepare('INSERT INTO salaries(nom_salarie,prenom_salarie,id_statut_salarie,id_utilisateur,id_ville,id_pole) VALUES(?,?,?,?,?,?)');

//Excécution de la requête
$requete->execute(array(
    $_POST['nom_salarie'],
    $_POST['prenom_salarie'],
    $_POST['id_statut_salarie'],
    $_POST['id_utilisateur'],
    $_POST['id_ville'],
    $_POST['id_pole']));


?>