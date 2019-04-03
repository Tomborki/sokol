<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Přidání aktuality</title>
    </head>
    <body>



<?php

    require_once("../pripojeni_db.php"); //pripojeni databaze




        $id_aktuality = $_GET["odstranit"];

        echo $id_aktuality;



        $sql = "DELETE FROM aktuality WHERE id=$id_aktuality";

        if ($conn->query($sql) === TRUE) {
          echo "Aktualita ůspěšně odstraněna";
        } else {
          echo "Chyba: " . $conn->error;
    }









?>

<a href="../home.php">Zpět</a>


</body>
</html>
