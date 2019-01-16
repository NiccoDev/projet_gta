<?php include ('../controllers/Modif_salarie.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modification salarié</title>
    </head>
    <body>

        <form method="POST" >

            <input type="hidden" value="<?php echo $salarie['id_salarie'] ?>" name="idSalarie"/>

            Nom : <input type="text" name="nom" value="<?php echo $salarie['nom_salarie'] ?>"/></br>
            Prénom : <input type="text" name="prenom" value="<?php echo $salarie['prenom_salarie'] ?>"/></br>
            Adresse : <input type="text" name="adresse" value="<?php echo $salarie['adresse_salarie'] ?>"/></br>
            Ville : <select name="ville">
                <?php foreach ($liste_villes as $ligne) { ?>
                    <option value="<?php echo $ligne['id_ville'] ?>" <?php
                    if ($ligne['id_ville'] == $salarie['id_ville']) {
                        echo 'selected';
                    }
                    ?>><?php echo $ligne['nom_ville'] . ' ' . $ligne['cp_ville'] ?></option>
                        <?php } ?>
            </select>
            </br><input type="submit" value="Enregistrer" name="enregistrer"/>

        </form>

    </p>

</body>
</html>
