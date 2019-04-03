<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Administrativní systém</title>
        <link href="css/styl_zaklad.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    </head>
    <body>

        <div class="liska_form">
        <a href="../index.php"><img class="logo_form" src="img/logo-sokol_lista.png" alt="logo_sokol"></a>
            <h1> T. J. Sokol Doubravka </h1>
        </div>

        <nav id="navigace">
              <div id="wrap">
                <a href="pridat_aktualitu.php" class="menu">Přidat aktualitu</a>
                <a href="#" class="menu">Přidat fotky</a>
                <a href="#" class="menu">Přidat akci</a>
              </div>
        </nav>

        <h2> Přidané aktuality </h2>

        <?php

        include "functions.php";

        require_once("pripojeni_db.php"); //pripojeni databaze




             $sql = "SELECT id, nazev, reg_date FROM aktuality";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row

                  echo "<table>";
                  echo "<tr>";
                  echo "<th> ID </th>";
                  echo "<th> Datum </th>";
                  echo "<th style='min-width: 500px;'> Název </th>";
                  echo "<th> Odstranit/Upravit </th>";
                  echo "</tr>";

                  while($row = $result->fetch_assoc()) {

                      $id = $row["id"];
                      $datum = $row["reg_date"];
                      $nazev = $row["nazev"];

                      echo "<tr>";

                      echo "<td>" . $id . "<td>" . $datum . "<td>" . $nazev;

                      echo "<td>";
                      echo "<a href='mysql/odebrani_aktuality.php?odstranit=$id'>Odstranit</a>";  // odstraneni
                      echo "/";
                      echo "<a href='upraveni_aktuality.php?upravit=$id'>Upravit</a>";   //upraveni


                      echo "<tr>";

                       }

                  echo "</table>";


              } else {
                  echo "Není tady žádná aktualita :(";
              }
              $conn->close();
        ?>


    </body>
</html>
