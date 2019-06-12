<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Přidání aktuality</title>
    </head>
    <body>

<?php

    require_once("../pripojeni_db.php"); //pripojeni databaze

    $nazev_form = $_POST["nazev"];
    $kategorie_form = $_POST["kategorie"];
    $upoutavka_form = $_POST["upoutavka"];
    $obsah_form = $_POST["obsah"];


   // prepare and bind
    $sql = "INSERT INTO aktuality (nazev, kategorie, upoutavka, obsah) VALUES ('$nazev_form', '$kategorie_form', '$upoutavka_form', '$obsah_form')";
    mysqli_query($conn, $sql);
    echo "New records created successfully";

?>

<a href="../home.php">Zpět</a>


</body>
</html>
