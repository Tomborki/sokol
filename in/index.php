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
    <body>

    <div class="liska_form">

    <img class="logo_form" src="img/logo-sokol_lista.png" alt="logo_sokol">

    <h1> T. J. Sokol Doubravka </h1>

    </div>



  <h2 class="nadpis_form_h2">Redační systém webu</h2>

   <div class="formular">

        <form method="post">

           <p class="p_form prvni">Uživatelské jméno<br> <input class="overeni_form" type="text" name="user"><br></p>

           <p class="p_form">Heslo<br> <input class="overeni_form" type="password" name="pass"> <br></p>

           <input type="submit">

        </form>

   </div>

   <?php

//________________________OVERENI FUNKCE________________________________//


        if (isset($_POST["user"]) && isset($_POST["pass"])) {

          include "functions.php";

          $username = $_POST["user"];
          $password = $_POST["pass"];

          overeni($username, $password);

        }

     ?>



    </body>
</html>
