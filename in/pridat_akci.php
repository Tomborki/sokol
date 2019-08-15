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



        <h2 class="nadpis_form_h2">Přidání akce</h2>


        <form action="mysql/pridani_akce_do_databaze.php" method="post">


            <h3>Název akce</h3>
            <input class="input_nazev" type="text" name="nazev"><br>
            <h3>Datum</h3>
            <input class="input_nazev" type="date" name="datum"><br>
            <h3>Čas od</h3>
            <input class="input_nazev" type="time" name="casOd"><br>
            <h3>Čas do</h3>
            <input class="input_nazev" type="time" name="casDo"><br>
            <h3>Místo</h3>
            <input class="input_nazev" type="text" name="misto"><br>
            <h3>URL s mapou (nepovinné)</h3>
            <input class="input_nazev" type="text" name="url_mapa"><br>

            <h3>Obsah akce</h3>
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
