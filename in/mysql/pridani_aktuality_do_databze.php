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
    $stmt = $conn->prepare("INSERT INTO aktuality (nazev, kategorie, upoutavka, obsah) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nazev, $kategorie, $upoutavka, $obsah);

    // set parameters and execute
    $nazev = $nazev_form;
    $kategorie = $kategorie_form;
    $upoutavka = $upoutavka_form;
    $obsah = $obsah_form;

    $stmt->execute();



    echo "New records created successfully";

    $stmt->close();
    $conn->close();
?>

<a href="../home.php">Zpět</a>


</body>
</html>
