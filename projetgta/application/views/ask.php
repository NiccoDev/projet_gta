<?php
session_start();
$_SESSION['login'];
echo 'Bonjour ' . $_SESSION['login'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Demande</title>
    </head>
    <body>

        <h2>Saisie des dates d'absence</h2>

        <form>
            <label>Date de début</label>
            <input type="date" name="absDebut" />

            <label>Date de fin</label>
            <input type="date" name="absFin"/>

            <input type="submit" value="Valider" name="action"/>


        </form>
    </body>
</html>
