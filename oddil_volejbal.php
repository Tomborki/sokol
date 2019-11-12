<!DOCTYPE html>
<html>
    <head>

    <?php require_once("meta.php"); ?>

    <link href="css/12cols.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
    <link href="css/media_1000px.css" rel="stylesheet">
    <link href="css/media_520px.css" rel="stylesheet">
    <link href="css/oddil.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link href="lightbox/dist/css/lightbox.css" rel="stylesheet">



    </head>
      <?php require_once("header.php"); ?>

      <div id="info">
        <h2 id="oddil_napis"> Oddíl Volejbalu </h2>

          <p>Volejbal má v Sokole Doubravka dlouhou a úspěšnou historii. V současnosti je v oddíle volejbalu registrováno 50–60 členů soutěžního nebo rekreačního zaměření. Družstva jsou složena převážně z bývalých odchovanců, kteří se snaží udržovat v Doubravce tradici kvalitního volejbalu. Naším úkolem pro další období je věnovat pozornost výchově nové generace mladších hráčů, aby bylo zajištěno pokračování sportovní činnosti oddílu i v budoucnu.</p>

           <p>   Mužstva muži A, muži B a ženy hrají pravidelně v městském přeboru, soutěži Českého volejbalového svazu. Muži A se v konkurenci plzeňských volejbalových oddílů pravidelně umisťují na předních příčkách. V sezónách 2015/2016 a 2017/2018 v městském přeboru zvítězili..</p>

        </div>

        <div class="social_container_oddil_volejbal">
              <h2 class="like rezervace_nadpis" style="text-decoration: underline;"> Aktuální tabulky, rozpisy a výsledky utkání soutěží: </h2>
              <section class="rodic_social_oddil">
                   <article class="flex_social_oddil_volej">

                        <h3>Muži - I. třída Plzeň-město</h3>    
                        <a class="tabulka_volej_tlacitko" href="http://m.cvf.cz/skupina.php?soutez=PM-M" target="_blank">Tabulka</a>                 


                  </article>
                   <article class="flex_social_oddil_volej">

                        <h3>Ženy - I. třída Plzeň-město</h3>
                        <a class="tabulka_volej_tlacitko" href="http://m.cvf.cz/skupina.php?soutez=PM-Z" target="_blank">Tabulka</a>          

                  </article>
              </section>
          </div>
          <div id="info" style="top: 0px; text-align: center;">

              <p>Pokud Vás zajímá doubravecký volejbal, přijďte fandit při utkáních na kurty Sokola Doubravka nebo ještě lépe si přijďte sami zahrát. Volejbalové i beachvolejbalové kurty je možné pronajmout <a href="https://jdemenato.cz/reservation/sokol-doubravka/reservationcalendaroverview">(Rezervace)</a>, přidat se také můžete ke skupině rekreačního volejbalu. Pokud hledáte možnost hrát volejbal na soutěžní úrovni, můžete se domluvit a zkusit trénink družstev mužů nebo žen.</p>

               <p>Jan Kopp, předseda oddílu volejbalu</p>

            </div>

          <div class="aktuality_container">
                   <h2 id="kde">Aktuality v kategorii volejbal</h2>
                   <div class="flex_aktualita">
                   <?php

                     require_once("in/pripojeni_db.php"); //pripojeni databaze

                     require_once("in/functions.php");

                     select_aktuality_podle_kategorie($conn, "volejbal");

                    ?>
                  </div>
                  <a class="info_aktualita" href="aktuality.php"> Zobrazit další aktuality </a>
          </div>

          <div class="foto_container_volej">
                   <h2 id="kde">Fotky</h2>
                       <a href="img/oddil/volejbal_A.jpg" data-lightbox="volejbal" data-title="Volejbal muži A"><img class="foto_volej" src="img/oddil/volejbal_A_tm.jpg"></a>
                       <a href="img/oddil/volejbal_B.jpg" data-lightbox="volejbal" data-title="Volejbal muži B"><img class="foto_volej" src="img/oddil/volejbal_B_tm.jpg"></a>
          </div>


 <!-- ---------------------------------------------------------------------------------------------------------------------->
        <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
        <?php require_once("footer.php"); ?>

</html>
