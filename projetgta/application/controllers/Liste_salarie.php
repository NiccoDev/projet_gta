<?php 
include ('../models/Salarie_model.php');
include ('../connexionbdd.php');
?>

<?php

if (isset($_POST['delete']) && $_POST['delete'] == 'Supprimer') {
    
    $delete = deleteOne($_POST['idSalarie'], $bdd);
}

$liste_salaries = getAll($bdd);