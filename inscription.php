<?php
echo "CREATION DU COMPTE";
//test le formulaire l'entree pseudo et mdp.
if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    //On récupère les variables
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
    //On encrypte en md5 ou en sha1 (sha256 c'est mieux)
    $crypt = md5($mdp);
    $crypt2 = sha1($mdp);

   // On vérifie si le dossier utilisateur existe.
    if(!is_dir("utilisateur")) {
    // Sinon on crée un dossier utilisateur.
    mkdir("utilisateur");

   }
    //Crée un fichier pr l'utilisateur dans le dossier et écrit le contenu puis ferme le fichier.
    $new_file = fopen("utilisateur/" . $pseudo. ".txt" , "w");
    //On met son mdp encrypté dedans
    fwrite($new_file, $crypt);
    //on ferme le fichier
    fclose($new_file);
    //On lance la session à l'inscription et on y stock le nom d'utilisateur
    session_start();
    $_SESSION['utilisateur'] = $pseudo;
    echo '<p>Vous avez bien été inscrit.e</p>';
}
/*
Nous allons ici récupérer les données d'un utilisteur
pour l'inscrire à notre site.
L'inscription consistera à stocker dans un fichier
le mot de passe de l'utilisateur en question, encrypté

if(isset($_POST['pseudo']) 
&& isset($_POST['mdp'])){
$id = $_POST["pseudo"];
$mdp = $_POST['mdp'];
$crypt = md5($mdp);
//$crypt2 = sha1($mdp); 
if(!is_dir("utilisateur")) {
mkdir("utilisateur");
}
$new_file = fopen("utilisateur/" .$id.".txt", "w");
fwrite($new_file, $crypt);
fclose($new_file);
}


/*$fichiers = scandir("utilisateur");
foreach($fichiers as $fichier) {
        if (is_dir($fichier)) {
            $fichiermdp = file_get_contents($fichier);
        }*/
        ?>
        <a href="index.php">Retour</a>