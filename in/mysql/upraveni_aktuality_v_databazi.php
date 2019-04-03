<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Přidání aktuality</title>
    </head>
    <body>

<?php

    require_once("../pripojeni_db.php"); //pripojeni databaze


    $nazev_edit = $_POST["nazev"];
    $kategorie_edit = $_POST["kategorie"];
    $upoutavka_edit = $_POST["upoutavka"];
    $obsah_edit = $_POST["obsah"];
    $id_aktuality = $_POST["id_aktuality"];





    $sql = "UPDATE aktuality SET nazev='$nazev_edit', kategorie='$kategorie_edit', upoutavka='$upoutavka_edit', obsah='$obsah_edit'  WHERE id=$id_aktuality";

 if ($conn->query($sql) === TRUE) {
     echo "Record updated successfully";
     echo "<a href='../home.php'> Zpět! </a>";
 } else {
     echo "Error updating record: " . $conn->error;
 }

 $conn->close();

 ?>

<a href="../home.php">Zpět</a>


</body>
</html>
