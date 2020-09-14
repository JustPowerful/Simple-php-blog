<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Administration | Login </title>
  </head>
  <body>

  <center>
    <form action="login.php" method="post">
      <input type="text" name="username" ><br>
      <input type="password" name="password" ><br>
      <input type="submit" value="Login">
    </form>
  </center>

    <?php

    $username = $_POST["username"];
    $password = $_POST["password"];

    // checks if the password and the username is true
    // if its true you get the cookie TOKEN
    // if not you get a null value

    if ($username == "username"){
      if($password == "password"){
        echo "<script> document.cookie = 'admin=919A8D9296919A'; </script>";

        $cookie = $_COOKIE["admin"];

        // if the cookie is the true value , you get redirected
        if($cookie == "919A8D9296919A"){
          echo "<script> alert('Logged in !'); </script>";
          echo "<script> document.location = '/www/edit.php'; </script>";
        } else {
          echo "<script> location.reload(); </script>";
        }

      } else {
        echo "password is incorrect :( ";
        echo "<script> document.cookie = 'admin=null'; </script>";
      }
    } else {
      echo "Something went wrong !";
      echo "<script> document.cookie = 'admin=null'; </script>";
    }

    ?>
  </body>
</html>
