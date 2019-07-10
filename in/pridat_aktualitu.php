<!DOCTYPE html>
<html lang="cs">
      <head>
          <meta charset="utf-8">
          <title>Admin - Aktuality</title>
          <link href="css/styl_zaklad.css" rel="stylesheet">
          <link href="css/input_styl.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- Make sure the path to CKEditor is correct. -->
          <script src="ckeditor/ckeditor.js"></script>
      </head>
      <body>

        <?php require_once("blocks/nav.php") // NAVIGACE ------ ?>

<!--

        <h2 class="nadpis_form_h2">Přidání aktuality</h2>


        <form action="mysql/pridani_aktuality_do_databze.php" method="post"  enctype="multipart/form-data">


            <h3>Název aktuality</h3>
            <input class="input_nazev" type="text" name="nazev"><br>
            <h3>Důležitá aktualita?</h3>
            <label for="radio">Ano</label>
            <input type="radio" name="radio" value="ano">
            <label for="radio">Ne</label>
            <input type="radio" name="radio" checked value="ne">
            <h3>Kategorie</h3>
            <select class="input_kategorie" name="kategorie">
                  <option value="sokol">Sokol</option>
                  <option value="badminton">Badminton</option>
                  <option value="sokolská všesrannost">Sokolská všestrannost</option>
                  <option value="volejbal">Volejbal</option>
            </select><br>

            <h3>Upoutavka</h3>
            <textarea name="upoutavka" class="ckeditor">
                This is my textarea to be replaced with CKEditor.
            </textarea><br>

            <h3>Obsah aktuality</h3>
            <textarea name="obsah" class="ckeditor">
                This is my textarea to be replaced with CKEditor.
            </textarea><br>
            <h3>Obrázek</h3>
            <input type="file" multiple="multiple" name="image[]"><br>
            <input class="input_submit" type="submit" value="Přidat">











            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {

                  uiColor: '#ff9999',
                  width: '70%',
                  height: 500,



                });
            </script>
        </form>

      -->

      <script src="blocks/change_nav.js"></script>



    </body>
</html>
