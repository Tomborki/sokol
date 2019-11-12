<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sokol Doubravka</title>
    <link href="css/12cols.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
    <link href="css/media_1000px.css" rel="stylesheet">
    <link href="css/media_520px.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">

<link rel="icon" href="img/favicon-sokol.png" sizes="20x20">

    </head>
      <?php
            require_once("header.php");

            require_once("in/pripojeni_db.php"); //pripojeni databaze

            require_once("in/functions.php");
      ?>

          <!-- -------------------------------------------------------------------------------------------------------------------- -->

          <div class="info_sv">

          <h2 id="napis_sv"> Sokolská všestranost</h2>
          <p class="predmluva_sv">Rozhodujete se, jak vyplnit volný čas svých dětí, popř. i svůj? Jste přesvědčeni o tom, že pravidelné cvičení a sportování v něm má mít své místo? Cítíte potřebu umožnit svým dětem pohybové aktivity, jde Vám spíše o všestrannost? Chcete začít s cílenou sportovní přípravou? Nevíte, kam své dítě přihlásit? Možná Vám trochu usnadníme výběr tím, že Vás seznámíme s činností jednotlivých oddílů našeho odboru sokolské všestrannosti a nabídneme Vám možnost zapojení Vašich dětí do jednotlivých sportovních aktivit..</p>
          <p class="predmluva_sv druha_predmluva">Informace, kdy jednotlivé složky odboru sokolské všestannosti cvičí a kdo cvičení vede naleznete na následujících odkazech:</p>

          <div class="obsah_sv">
          <button class="collapsible">Rodiče a děti</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "rodice_a_deti") ?>

            </div>


          <button class="collapsible">Předškolní děti</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "predskolni_deti") ?>

            </div>


          <button class="collapsible">Mladší žactvo</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "mladsi_zactvo") ?>

            </div>


          <button class="collapsible">Sportnovní a míčové hry</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "pohyb_mic_hry_zactvo") ?>

            </div>


          <button class="collapsible">Florbal</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "florbal") ?>

            </div>


          <button class="collapsible">Sportovní gymnastika</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "sport_gym") ?>

            </div>


          <button class="collapsible">Bodyform</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "bodyform") ?>

            </div>

          <button class="collapsible">Jóga</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "joga") ?>

            </div>


          <button class="collapsible">Seniorky</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "seniorky") ?>

            </div>


          <button class="collapsible">Senioři</button>
            <div class="content">

              <?php sokolska_vsestrannost($conn, "seniori") ?>

            </div>





          </div>
          </div>
          <div class="aktuality_container">
                   <h2 id="kde">Aktuality v kategorii SV</h2>
                   <div class="flex_aktualita">
                   <?php

                     require_once("in/pripojeni_db.php"); //pripojeni databaze

                     require_once("in/functions.php");

                     select_aktuality_podle_kategorie($conn, "sokolská všesrannost");

                    ?>
                  </div>
                  <a class="info_aktualita" href="aktuality.php"> Zobrazit další aktuality </a>
          </div>

          <div class="container_bad">
                   <h2 id="kde">Členské příspěvky – sokolská všestrannost</h2>
                   <div class="tlacitka_container"> 
                   <a class="container_button" href="doc/prispevky.pdf"> Příspěvky </a>
                   </div>
            </div>



          <script>

          var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                  content.style.maxHeight = null;
                } else {
                  content.style.maxHeight = content.scrollHeight + "px";
                }
              });
            }

          </script>









        <!-- -------------------------------------------------------------------------------------------------------------------- -->

        <?php require_once("footer.php"); ?>

</html>
