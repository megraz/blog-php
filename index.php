<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Mon blog</title>
</head>
<body>


   <?php require_once('header.php'); ?>
   <h1> Mon blog </h1>
   <a href="create.html">Ajouter</a>
<?php 
$files = scandir("posts");
foreach($files as $file) {
        if (is_dir($file)) {
                continue;
        }
        echo '<h2>' .basename($file, ".txt"). '</h2>';
        $content = file_get_contents('posts/' .$file);
        echo '<p>' .$content. '</p>';
        echo '<form  method="post" action="delete.php">';
        echo '<input type="hidden"'.'name="filename" value="'.$file.'">';
        echo '<button>Supprimer</button>';
        echo '</form>';
        echo '<a href="change-file.php?fichier='.$file.'">Modifier</a>';
        /*echo '<form  method="GET" action="create.php">
        <input type="hidden" name="filename" value="'.$file.'">
        <input type="submit" value="edit">
        </form>'; */

}

?>
</body>
</html>