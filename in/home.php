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
                <a href="pridat_akci.php" class="menu">Přidat akci</a>
              </div>
        </nav>

        <h2> Přidané aktuality </h2>

        <?php

        require_once("functions.php");

        require_once("pripojeni_db.php"); //pripojeni databaze

        select_all_records_in($conn); ?>

        <h2> Přidané akce </h2>

        <?php

        select_all_records_in_akce($conn);

        ?>


    </body>
</html>
