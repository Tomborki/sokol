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



    <form action="mysql/pridani_aktuality_do_databze.php" method="post"  enctype="multipart/form-data">

                  <h1 class="nadpis_form_h2">Přidat novou aktualitu</h1>
                  <label for="nazev">Název aktuality: </label>
                  <input class="input_nazev" type="text" name="nazev">

                  <label for="radio">|  Důležitá aktualita?</label>
                  <label for="radio">Ano</label>
                  <input type="radio" name="radio" value="ano">
                  <label for="radio">Ne</label>
                  <input type="radio" name="radio" checked value="ne">

                  <label for="kategorie">|  Kategorie: </label>
                  <select class="input_kategorie" name="kategorie">
                        <option value="sokol">Sokol</option>
                        <option value="badminton">Badminton</option>
                        <option value="sokolská všestrannost">Sokolská všestrannost</option>
                        <option value="volejbal">Volejbal</option>
                        <option value="stolni_tenis">Stolní tenis</option>
                  </select><br>

                  <label for="nazev">Po kliknutí přesměrovat na: </label>
                  <input id="url" class="input_nazev" type="text" name="url">


                  <label for="upoutavka">Upoutavka</label>
                  <textarea id="upoutavka" name="upoutavka" class="ckeditor">
                      Přidejte upoutavku
                  </textarea>

                  <label for="obsah">Obsah aktuality</label>
                  <textarea id="obsah" name="obsah" class="ckeditor">
                      Přidejte obsah aktuality
                  </textarea><br>


                  <label>Obrázek</label>
                  <input type="file" multiple="multiple" name="image[]"><br>
                  <input class="input_submit" type="submit" value="Přidat">



                 <script>
                      // Replace the <textarea id="editor1"> with a CKEditor
                      // instance, using default configuration.
                      CKEDITOR.replace( 'upoutavka', {

                        width: '100%',
                        height: 100

                      });

                      CKEDITOR.replace( 'obsah', {

                        width: '100%',
                        height: 300

                      });
                  </script>




      </section>



      <script src="blocks/change_nav.js"></script>



    </body>
</html>
