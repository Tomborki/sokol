<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <title>Administrativní systém</title>
        <link href="css/styl_zaklad.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="login">

   <a href="../index.php"><img id="logo_login" src="../img/logo-sokol.png" alt="" width="75px"></a>
   <div class="formular_login">

     <h2 id="h2_login">Sokol admin</h2>

        <form method="post">

           <p class="p_form prvni">Uživatelské jméno<br> <input class="overeni_form" type="text" name="user"><br></p>

           <p class="p_form">Heslo<br> <input class="overeni_form" type="password" name="pass"> <br></p>

           <input class="submit_login" type="submit">

        </form>

   </div>

   <?php

//________________________OVERENI FUNKCE________________________________//


        if (isset($_POST["user"]) && isset($_POST["pass"])) {

          include "functions.php";
          require_once("pripojeni_db.php");

          $jmeno = htmlspecialchars($_POST["user"]);
          $heslo = htmlspecialchars($_POST["pass"]);

          overeni($jmeno, $heslo, $conn);

        }

     ?>



    </body>
</html>
