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
    $datum = date("d.m.Y");
    $obr = $_FILES['image']['name'];
    $pocet_obr = count($_FILES['image']['name']);
    error_reporting(0);




    $sql = "INSERT INTO aktuality (nazev, kategorie, upoutavka, obsah, time, obr0, obr1, obr2 ) VALUES ('$nazev_form', '$kategorie_form', '$upoutavka_form', '$obsah_form', '$datum', '$obr[0]', '$obr[1]','$obr[2]')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      if ($pocet_obr == 1 OR $pocet_obr == 2 OR $pocet_obr == 3){

        for ($i=0; $i < $pocet_obr; $i++) {

          $file = $_FILES['image']['tmp_name'][$i];
          $sourceProperties = getimagesize($file);
          $fileNewName = $_FILES['image']['name'][$i];
          $folderPathBig = "../img/aktuality/";
          $folderPathSmall = "../img/aktuality/thum/";
          $ext = pathinfo($_FILES['image']['name'][$i], PATHINFO_EXTENSION);
          $imageType = $sourceProperties[2];



          switch ($imageType) {


              case IMAGETYPE_PNG:
                  $imageResourceId = imagecreatefrompng($file);
                  $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                  imagepng($targetLayer,$folderPathSmall. $fileNewName);
                  break 1;


              case IMAGETYPE_GIF:
                  $imageResourceId = imagecreatefromgif($file);
                  $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                  imagegif($targetLayer,$folderPathSmall. $fileNewName);
                  break 1;


              case IMAGETYPE_JPEG:
                  $imageResourceId = imagecreatefromjpeg($file);
                  $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                  imagejpeg($targetLayer,$folderPathSmall. $fileNewName);
                  break 1;


              default:
                  echo "Nenahraný/nesprávný obrázek";
                  exit;
                  break 1;
          }


          move_uploaded_file($file, $folderPathBig. $fileNewName);



          echo "Image Resize Successfully.";


        }

      }







        function imageResize($imageResourceId,$width,$height) {

          echo $width;
          echo $height;

            $targetWidth = 250;
            $targetHeight = 200;


            $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
            imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);


            return $targetLayer;
        }

?>

<a href="../home.php">Zpět</a>


</body>
</html>
