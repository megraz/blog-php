<?php
$file = $_GET['filename'];
    if(isset($_GET['filename']))
    {
   unlink('posts/'.$file);
    }
?>