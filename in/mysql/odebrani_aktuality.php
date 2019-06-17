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

        $sql_obr = "SELECT obr0, obr1, obr2 FROM aktuality WHERE id=$id_aktuality";
        $result_obr = mysqli_query($conn, $sql_obr);

        while($row = mysqli_fetch_assoc($result_obr)) {

            $obr0 = $row["obr0"];
            $obr1 = $row["obr1"];
            $obr2 = $row["obr2"];

            if ($obr0 != ""){
              $myFileFull0 = "../img/aktuality/" . $obr0 . "";
              $myFileThum0 = "../img/aktuality/thum/" . $obr0 . "";
              unlink($myFileFull0) or die("Couldn't delete file");
              unlink($myFileThum0) or die("Couldn't delete file");
            }

            if ($obr1 != ""){
              $myFileFull1 = "../img/aktuality/" . $obr1 . "";
              $myFileThum1 = "../img/aktuality/thum/" . $obr1 . "";
              unlink($myFileFull1) or die("Couldn't delete file");
              unlink($myFileThum1) or die("Couldn't delete file");
            }

            if ($obr2 != ""){
              $myFileFull2 = "../img/aktuality/" . $obr2 . "";
              $myFileThum2 = "../img/aktuality/thum/" . $obr2 . "";
              unlink($myFileFull2) or die("Couldn't delete file");
              unlink($myFileThum2) or die("Couldn't delete file");
            }

          }

        $sql = "DELETE FROM aktuality WHERE id=$id_aktuality";
        mysqli_query($conn, $sql);

?>

<a href="../home.php">Zpět</a>


</body>
</html>
