<?php
$file = $_GET['filename'];
    if(isset($_GET['filename']))
    {
   unlink('posts/'.$file);
    }
    //pour supprimer le fichier en cliquant sur le bouton//
    //sans appeler le fichier par son nom ils st ts concernes//
?>
