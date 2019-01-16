<?php
session_start();
$_SESSION['login'];
echo 'Bonjour ' . $_SESSION['login'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil Administateur</title>
    </head>
    <body>

        <h1>Bienvenue sur le portail d'administration</h1>

        <form method="POST" action="">

            <p>
                <a href="liste_salarie.php"><input type="button" value="Mettre à jour un salarié" /></a>
            </p>

            <p>
                <a href="registration.php"><input type="button" value="Nouveau salarié" /></a>
            </p>

        </form>
    </body>
</html>
