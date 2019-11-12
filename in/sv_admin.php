<!DOCTYPE html>
<html lang="cs">
      <head>
          <meta charset="utf-8">
          <title>Admin - SV</title>
          <link href="css/styl_zaklad.css" rel="stylesheet">
          <link href="css/input_styl.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
          <!-- Make sure the path to CKEditor is correct. -->
          <script src="ckeditor/ckeditor.js"></script>
          <?php  
                      require_once("functions.php");

                      require_once("pripojeni_db.php"); //pripojeni databaze
          ?>
      </head>
      <body>

        <?php require_once("blocks/nav.php") // NAVIGACE ------ ?>

        <section>


          <h1>Sokolská všesrannost</h1>
          <div class="vyber_sv">
            <ul>
              <li>Rodiče a děti</li>
              <li>Předškolní děti</li>
              <li>Mladší žactvo</li>
              <li>Pohybové a míčové hry - žactvo</li>
              <li>Florbal</li>
              <li>Sportovní gymnastika</li>
              <li>Aerobik</li>
              <li>Bodyform</li>
              <li>Seniorky</li>
              <li>Muži</li>
              <li>Senioři</li>
              <li>Jóga</li>
            </ul>
          </div>

          <form action="upraveni_sv.php">
              <textarea class="ckeditor" name="sv_oddil_text" id="" cols="30" rows="10">
                <?php sokolska_vsestrannost($conn, "joga"); ?>
              </textarea>
            </form>


       </section>



      <script src="blocks/change_nav.js"></script>
      
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



    </body>
</html>
