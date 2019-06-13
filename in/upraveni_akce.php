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



  <h2 class="nadpis_form_h2">Upravení akce</h2>

      <?php

      require_once("pripojeni_db.php"); //pripojeni databaze

      $id_akce = $_GET["upravit"];

      $sql = "SELECT id, nazev, datum, casOd, casDo, misto, obsah FROM akce WHERE id=$id_akce";
      $result = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($result)) {
        $nazev_form = $row["nazev"];
        $datum_form = $row["datum"];
        $casOd_form = $row["casOd"];
        $casDo_form = $row["casDo"];
        $misto_form = $row["misto"];
        $obsah_form = $row["obsah"];





      echo  '<form action="mysql/upraveni_akce_v_databazi.php" method="post">';
      echo "<h3>Název akce</h3>";
      echo   '<input class="input_nazev" type="text" name="nazev" value="' . $nazev_form . '"><br>';
      echo "<h3>Datum</h3>";
      echo  '<input class="input_nazev" type="date" name="datum" value="' . $datum_form . '"><br>';
      echo "<h3>Čas od</h3>";
      echo  '<input class="input_nazev" type="time" name="casOd" value="' . $casOd_form . '"><br>';
      echo "<h3>Čas do</h3>";
      echo  '<input class="input_nazev" type="time" name="casDo" value="' . $casDo_form . '"><br>';
      echo "<h3>Místo</h3>";
      echo  '<input class="input_nazev" type="text" name="misto" value="' . $misto_form . '"><br>';
      echo "<h3>Obsah akce</h3>";
      echo  '<textarea name="obsah" class="ckeditor">
                ' . $obsah_form . '
             </textarea><br>';

     echo '<input type="hidden" name="id_akce" value="' . $id_akce .'">';

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
