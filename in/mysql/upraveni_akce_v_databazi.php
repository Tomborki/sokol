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
    $datum_edit = $_POST["datum"];
    $casOd_edit = $_POST["casOd"];
    $casDo_edit = $_POST["casDo"];
    $misto_edit = $_POST["misto"];
    $obsah_edit = $_POST["obsah"];
    $id_akce = $_POST["id_akce"];


     $sql = "UPDATE akce SET nazev='$nazev_edit', datum='$datum_edit', casOd='$casOd_edit', casDo='$casDo_edit', misto='$misto_edit', obsah='$obsah_edit'  WHERE id=$id_akce";

     if (mysqli_query($conn, $sql)) {
         echo "Record updated successfully";
         echo "<a href='../home.php'> Zpět! </a>";
     } else {
         echo "Error updating record: " . $conn->error;
     }

     $conn->close();

 ?>

</body>
</html>
