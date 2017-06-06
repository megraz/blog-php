<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="inscription.php" method="POST">
    <label>Pseudo</label>
    <input type="text" name="pseudo">
    <label>Mot de passe: </label>
    <input type="password" name="mdp">
    <button name="bouton">S'inscription</button>
    </form>
    <form action="login.php" method="POST">
    <label>Pseudo :</label>
    <input type="text" name="pseudo">
    <label>Mot de Passe :</label>
    <input type="password" name="mdp">
    <button>Connexion</button>
</form>


       <?php
 /*
 echo "<form action='inscription.php' method='POST' name='inscription'>
    <fieldset>
    <p>Entre votre pseudo : <input type='text' name='pseudo'></p>
    <p>Entre votre Mot de passe : <input type='password' name='mdp'></p>
    <input type='submit' value='Inscription'>
    <input type='submit' value='Connexion'>
    </fieldset>
    </form>"; */
    ?>
</body>

</html>