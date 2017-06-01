<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Mon blog</title>
</head>
<body>
   <h1> Mon blog </h1>
<?php 

$files = scandir("posts");
foreach($files as $file) {
        if (is_dir($file)) {
                continue;
        }
        echo '<h1>' .basename($file, ".txt"). '</h1>';
        $content = file_get_contents('posts/' .$file);
        echo '<p>' .$content. '</p>';
}








/*$log_directory = 'posts';$results_array = array();if (is_dir($log_directory))
{
       if ($handle = opendir($log_directory))
       {
              //handle pointeur de systeme de fichier de type ressource
              cree en utlisant la fonction fopen//
               while(($file = readdir($handle)) !== FALSE)
               {
                       $results_array[] = $file;
               }
               closedir($handle);
       }
}foreach($results_array as $value)
//pour enlever les points qui st à l'ecran//
if(is_file('posts/' .$value)) 
{
   echo "<ul>".$value ."</ul>". '<br/>';
}
*/

?>
</body>
</html>