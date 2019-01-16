<?php

include ('../models/Salarie_model.php');
include ('../models/Registration_model.php');
include ('../connexionbdd.php');
?>

<?php

if (isset($_POST['edit'])) {

    $salarie = getOne($_POST['idSalarie'], $bdd);
    $liste_villes = recuperer_villes($bdd);
    
} elseif (isset($_POST['enregistrer'])) {

    $param = array();
   
    $param['nomSalarie'] = $_POST['nom'];
    $param['prenomSalarie'] = $_POST['prenom'];
    $param['adresseSalarie'] = $_POST['adresse'];
    $param['ville'] = $_POST['ville'];

    update_salarie($param, $bdd, $_POST['idSalarie']);
    header('location:liste_salarie.php');
    exit();
} else {

    header('location:admin.php');
    exit();
}




