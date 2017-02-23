<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 23/02/17
 * Time: 23:49
 */

CONST MDP = "mdp";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page privée</title>

</head>
<body>
<h1>Accès réservé</h1>
<?php if($_POST['mdp'] == MDP) { ?>
    <p>Contenu secret</p>';

<?php } else { ?>
    <form method="post" action="index.php">
        <?php if(!empty($_POST['mdp'])) { ?>
            <p style="color: red">Bad credentials !</p>
        <?php } ?>
        <label for="mdp">Mot de passe :</label>
        <input name="mdp" id="mdp" type="password"/>
        <input type="submit" value="Valider" />
    </form>

<?php }?>



</body>
