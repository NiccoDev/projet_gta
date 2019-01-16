<?php include('../controllers/Registration.php'); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
    </head>
    <body>
        <form method="POST" action="">

            <p>
                <label>Nom : </label>
                <input id="name" type="text" name="name" placeholder="" />
            </p>

            <p>
                <label>Prénom : </label>
                <input id="lastName" type="text" name="lastName" placeholder="" />
            </p>

            <p>
                <label>Adresse : </label>
                <input id="adresseSalarie" type="text" name="adresseSalarie" placeholder="" />
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
                <label>Login : </label>
                <input id="email" type="email" name="email" placeholder="Email" />
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
