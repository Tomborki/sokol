<!DOCTYPE html>
<html lang="cs">
      <head>
          <meta charset="utf-8">
          <title>Admin - Aktuality</title>
          <link href="css/styl_zaklad.css" rel="stylesheet">
          <link href="css/input_styl.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
          <!-- Make sure the path to CKEditor is correct. -->
          <script src="ckeditor/ckeditor.js"></script>
      </head>
      <body>

        <?php require_once("blocks/nav.php") // NAVIGACE ------ ?>

        <section class="obsah_admin_hlavni">


        </form>

        <div class="zobrazeni_aktualit">

          <h1>Všechny přidané aktuality</h1>
          <div class="tabulka_aktuality">
            <?php

            require_once("functions.php");

            require_once("pripojeni_db.php"); //pripojeni databaze

            select_all_records_in($conn); ?>
          </div>


        </div>

      </section>



      <script src="blocks/change_nav.js"></script>



    </body>
</html>
