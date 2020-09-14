<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Administration | Edit </title>
  </head>
  <body>

    <?php

    $cookie = $_COOKIE["admin"];

    if($cookie == "919A8D9296919A"){
      // displays a form .

      echo "<center>";
      echo "<form action='/www/edit.php' method='post'>";
      echo "<strong>Title:</strong>";
      echo "<input type='text' name='title' size='100' placeholder='title'/><br>";
      echo "<strong>Content:</strong>";
      echo "<input type='text' name='content' size='100'><br>";
      echo "<input type='submit'";
      echo "<br>";
      echo "</form>";
      echo "</center>";

      // takes the values and store them into variables
      $title = $_POST["title"];
      $content = $_POST["content"];

      //Writes the values in a txt file

      //see if the title is written
      if($title == ""){
        echo "You need to write something !";
      } else {
        $postfile = "posts.txt";

        $opfile = fopen($postfile, "a");
        fwrite($opfile, "<strong> Title: </strong> $title \n<br><strong>Content:</strong> $content \n");
        fwrite($opfile, "<hr>\n");
        fclose($opfile);

        header("Location: /www/read.php");

      }


    } else {
      echo "You didn't log in ! ";
    }

    ?>

  </body>
</html>
