<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <title>Administrativní systém</title>
        <link href="css/styl_zaklad.css" rel="stylesheet">
        <link href="css/input_styl.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>

    <div class="liska_form">

    <img class="logo_form" src="img/logo-sokol_lista.png" alt="logo_sokol">

    <h1> T. J. Sokol Doubravka </h1>

    </div>



  <h2 class="nadpis_form_h2">Upravení aktuality</h2>

      <?php

      require_once("pripojeni_db.php"); //pripojeni databaze

      $id_aktuality = $_GET["upravit"];

      $sql = "SELECT id, nazev, kategorie, upoutavka, obsah FROM aktuality WHERE id=$id_aktuality";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()) {
      $nazev = $row["nazev"];
      $kategorie = $row["kategorie"];
      $upoutavka = $row["upoutavka"];
      $obsah = $row["obsah"];




      echo  '<form action="mysql/upraveni_aktuality_v_databazi.php" method="post">';
      echo "<h3>Název aktuality</h3>";
      echo   '<input class="input_nazev" type="text" name="nazev" value="' . $nazev . '"><br>';
      echo "<h3>Kategorie</h3>";
      echo  '<select class="input_kategorie" name="kategorie">
                  <option value="sokol">Sokol</option>
                  <option value="badminton">Badminton</option>
                  <option value="sokolska vsesrannost">Sokolská všestrannost</option>
                  <option value="volejbal">Volejbal</option>
            </select><br>';


      echo "<h3>Upoutavka</h3>";
      echo  '<textarea name="upoutavka" class="ckeditor">'
                . $upoutavka .
            '</textarea><br>';

      echo "<h3>Obsah aktuality</h3>";
      echo  '<textarea name="obsah" class="ckeditor">'
                . $obsah .
            '</textarea><br>';

     echo '<input type="hidden" name="id_aktuality" value="' . $id_aktuality .'">';

      echo  '<input class="input_submit" type="submit" value="Upravit">';
      }










      echo   "<script>
                // Replace the <textarea id='editor1'> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {

                  uiColor: '#ff9999',
                  width: '70%',
                  height: 500,



                });
            </script>";
      echo  '</form>';

        ?>
    </body>
</html>
