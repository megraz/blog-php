<!--je copie colle create-file.php sauf if is_diret je crée une variable $previous_title et supp son contenu ac unlink-->
<?php 
if (isset($_POST['create'])) {
    $titre = $_POST ["titre"];
    $contenu = $_POST ["contenu"]; 
 
    $previous_title= $_POST["previous_title"]; 
    unlink("posts/" .$previous_title. ".txt");



$fichier = fopen('posts/' .$titre. ".txt", "w");
fwrite($fichier, $contenu);
fclose($fichier);
echo '<p>bravo tu as écrit un fichier</p>';

} else {
    echo '<p>formulaire non envoyé</p>';
}

?>