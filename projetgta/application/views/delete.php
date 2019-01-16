<?php include('../controllers/Delete.php') ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Suppression d'un salarié</title>
    </head>
    <body>
        <form method="POST" action="">
            <p>
                <label>Nom : </label>
                <select id="name" name="name">
                    <option>Sélection du salarié à supprimer...</option>
                    <?php foreach ($liste_salaries as $ligne): ?>
                        <option value="<?php echo $ligne['id_salarie'] ?>"><?php echo $ligne['nom_salarie'] . ' ' . $ligne['prenom_salarie'] ?></option>
                    <?php endforeach ?>
                </select>
            </p>

            <input type="submit" name="action" value="Valider" />
        </form>
    </body>
</html>
