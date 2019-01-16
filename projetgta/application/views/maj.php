<?php include('../controllers/Maj.php') ?>
<?php
//if (isset($_SESSION['login']) AND isset($_SESSION['mdp'])) {
//    echo 'Bonjour ' . $_SESSION['login'];
//}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mis à jour d'un salarié</title>
    </head>
    <body>
        <form method="POST" action="">
            <p>
                <label>Nom : </label>
                <select id="name" name="name">
                    <option>Sélection du salarié à modifier...</option>
                    <?php foreach ($liste_salaries as $ligne): ?>
                        <option value="<?php echo $ligne['id_salarie'] ?>"><?php echo $ligne['nom_salarie'] . ' ' . $ligne['prenom_salarie'] ?></option>
                    <?php endforeach ?>
                </select>
            </p>

            <p>
                <label>Adresse : </label>
                <input id="adresseSalarie" type="text" name="adresseSalarie" />
            </p>

            <p>
                <label>Ville : </label>
                <select id="ville" name="ville">
                    <option>Sélection de la ville...</option>
                    <?php foreach ($liste_villes as $ligne): ?>
                        <option value="<?php echo $ligne['id_ville'] ?>"><?php echo $ligne['nom_ville'] . ' ' . $ligne['cp_ville'] ?></option>
                    <?php endforeach ?>
                </select>
            </p>

            <p>
                <label>Pole : </label>
                <select id="pole" name="pole">
                    <option>Sélection du pôle...</option>
                    <?php foreach ($liste_poles as $ligne): ?>
                        <option value="<?php echo $ligne['id_pole'] ?>"><?php echo $ligne['nom_pole'] ?></option>
                    <?php endforeach ?>
                </select>
            </p>

            <p>
                <label>Niveau : </label>
                <select id="niveau" name="niveau">
                    <option>Sélection du niveau...</option>
                    <?php foreach ($liste_niveaux as $ligne): ?>
                        <option value="<?php echo $ligne['id_niveau_salarie'] ?>"><?php echo $ligne['nom_niveau_salarie'] ?></option>
                    <?php endforeach ?>
                </select>
            </p>

            <input type="submit" name="action" value="Valider" />
        </form>
    </body>
</html>
