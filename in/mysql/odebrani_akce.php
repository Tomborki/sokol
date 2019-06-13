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

        $sql = "DELETE FROM akce WHERE id=$id_aktuality";
        mysqli_query($conn, $sql);

?>

<a href="../home.php">Zpět</a>


</body>
</html>
