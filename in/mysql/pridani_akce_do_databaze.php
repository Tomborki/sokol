<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Přidání akce</title>
    </head>
    <body>

<?php

    require_once("../pripojeni_db.php"); //pripojeni databaze

    $nazev_form = $_POST["nazev"];
    $datum_form = $_POST["datum"];
    $casOd_form = $_POST["casOd"];
    $casDo_form = $_POST["casDo"];
    $misto_form = $_POST["misto"];
    $url_mapa = $_POST["url_mapa"];
    $obsah_form = $_POST["obsah"];


   // prepare and bind
    $sql = "INSERT INTO akce (nazev, datum, casOd, casDo, misto, url_misto, obsah)
            VALUES ('$nazev_form', '$datum_form', '$casOd_form', '$casDo_form', '$misto_form', '$url_mapa', '$obsah_form')";
    mysqli_query($conn, $sql);
    echo "New records created successfully";

?>

<a href="../home.php">Zpět</a>


</body>
</html>
