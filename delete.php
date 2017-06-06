<?php
//On vérifie si on a bien la variable du post
if(isset($_POST['fichier']))  {
    //On vérifie si le fichier existe
    if(is_file('posts/'.$_POST['fichier'])) {
        //On supprime le fichier
        unlink('posts/'.$_POST['fichier']);
        //feedback utilisateur
        echo 'vous avez bien supprimé le fichier';
    }else {
        echo 'le fichier n\'existe pas';
    }
}
//lien pour revenir à la page principale
echo '<a href="index.php">Retour</a>';

/*
$file = $_GET['filename'];
    if(isset($_GET['filename']))
    {
   unlink('posts/'.$file);
    }
    //pour supprimer le fichier en cliquant sur le bouton//
    //sans appeler le fichier par son nom ils st ts concernes//
*/
?>
