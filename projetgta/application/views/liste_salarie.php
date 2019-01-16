<?php include ('../controllers/Liste_salarie.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste salarié</title>
    </head>
    <body>

        <table>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Login</td>
                <td>Action</td>
            </tr>

            <?php foreach ($liste_salaries as $salarie) { ?>
                <tr>
                    <td>
                        <?php echo $salarie['nom_salarie'] ?>
                    </td>  

                    <td>
                        <?php echo $salarie['prenom_salarie'] ?>
                    </td> 
                    <td>
                        <?php echo $salarie['login_salarie'] ?>
                    </td> 


                    <td>
                        
                        <form method="POST" action="modif_salarie.php">
                            <input type="hidden" value="<?php echo $salarie['id_salarie'] ?>" name="idSalarie"/>
                            <input type="submit" name="edit" value="Modifier"/>
                        </form>
                        <form method="POST">
                            <input type="hidden" value="<?php echo $salarie['id_salarie'] ?>" name="idSalarie"/>
                            <input type="submit" name="delete" value="Supprimer"/>
                        </form>
                    </td>

                </tr>

            <?php } ?>
        </table>

    </p>

</body>
</html>
