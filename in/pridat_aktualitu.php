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



        <h2 class="nadpis_form_h2">Přidání aktuality</h2>


        <form action="mysql/pridani_aktuality_do_databze.php" method="post">


            <h3>Název aktuality</h3>
            <input class="input_nazev" type="text" name="nazev"><br>
            <h3>Kategorie</h3>
            <select class="input_kategorie" name="kategorie">
                  <option value="sokol">Sokol</option>
                  <option value="badminton">Badminton</option>
                  <option value="sokolska vsesrannost">Sokolská všestrannost</option>
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
    </body>
</html>
