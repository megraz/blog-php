<!--le php est lu en premier par le navigateur dc le mettre en haut-->
<?php
$titre="";
// on declare la variable titre vide du formulaire idem pr contenu //
$contenu="";

if (isset($_GET['filename'])){ //on utilise isset pr vérifier que le fichier existe//
    $titre = basename($_GET['filename'], ".txt"); //on récupère les données titre du fichier et on rajoute basename([], ".txt") pr supp le txt qui s'ecrit en plus//
    $contenu = file_get_contents('posts/'.$_GET['filename']); // on recup le contenu et on y accède//
}
?><!DOCTYPE html><!--il faut tjs accoler la balise html à celle du php-->
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer Post Blog</title>
</head>

<body>
    <form action="create-file.php" method="POST">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $titre;?>"> <!--on remplace la valeur de l'input par une balise php pr afficher la variable qu'on a déclaré pr le titre-->
        <label>Contenu</label>
        <textarea name="contenu" cols="30" row="10"><?php echo $contenu; ?></textarea>
        <button name="create">Submit</button>
    </form>
    <!--<form action="create-file.php" method="POST">
        <p><input type="text" name="titre" id="titre" value="<?php echo $titre;?>" /></p>
        <p><textarea rows="20" cols="100" name="message" ><?php echo $contenu; ?></textarea></p>
        <p><input type="submit" value="submit" name="create" /></p>
    </form>-->
</body>


</html>