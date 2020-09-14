<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Simple blog </title>
  </head>
  <body>

    <?php

    $myfile = fopen("posts.txt", "r") or die("<center> <strong> Something is wrong ! </strong> <center>");
    echo fread($myfile,filesize("posts.txt"));
    fclose($myfile);

    ?>

  </body>
</html>
