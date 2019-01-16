<?php include ('../controllers/Salarie.php') ?>
<?php
session_start();
$_SESSION['login'];
echo 'Bonjour ' . $_SESSION['login'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil salarié</title>
    </head>
    <body>
        <h1>Bienvenue sur votre votre portail</h1>
        <form method="POST" action="">

            <p>
                <a href="ask.php"><input type="button" value="Demande d'absence" /></a>
            </p>

            <p>
                <a href=""><input type="button" value="Votre planning" /></a>
            </p>

            <p>
                <input type="submit" name="action" value="Déconnection"/>
            </p>

        </form>
    </body>
</html>
