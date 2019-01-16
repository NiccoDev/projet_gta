<?php include ('../controllers/Home.php') ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
    </head>
    <body>

        <h1>Bienvenue sur le portail d'absences</h1>

        <form method="POST" action="">

            <p>
                <label>Login : </label>
                <input type="email" name="login" placeholder="Email" />
            </p>

            <p>
                <label>Mot de passe : </label>
                <input type="password" name="mdp" />
            </p>

            <input type="submit" value="Valider" name="action" />

            <p>Mot de passe oublié cliquez <a href="pwd_forget.php">ici</a>.</p>

        </form>
    </body>
</html>
