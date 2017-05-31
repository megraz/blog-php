<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <h1> Mon blog </h1>
   <?php $log_directory = 'posts';$results_array = array();if (is_dir($log_directory))
{
       if ($handle = opendir($log_directory))
       {
              
               while(($file = readdir($handle)) !== FALSE)
               {
                       $results_array[] = $file;
               }
               closedir($handle);
       }
}foreach($results_array as $value)
{
   echo "<ul>".$value ."</ul>". '<br/>';
}
?>
</body>
</html>