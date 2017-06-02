<!DOCTYPE html>
<html lang="fr">
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
  echo '<form  method="GET" action="delete.php">
        <input type="hidden" name="filename" value="'.$file.'">
   <input type="submit" value="delete">
    </form>';

     echo '<form  method="GET" action="create.php">
        <input type="hidden" name="filename" value="'.$file.'">
   <input type="submit" value="edit">
    </form>';

}

?>
</body>
</html>