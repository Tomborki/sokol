<!DOCTYPE html>
<html>
    <head>

    <?php require_once("meta.php"); ?>

    <link href="css/12cols.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
    <link href="css/media_1000px.css" rel="stylesheet">
    <link href="css/media_520px.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link rel="stylesheet" href="swiper-4.3.3/dist/css/swiper.min.css">



    </head>

      <?php require_once("header.php"); ?>

          <!-- ---------------------------------------------------------------------------------------------------------------- -->

          <section id="section_index">
              <div class="velka_fotka">


              </div>


            <div class="ikony">
                <h2 id="sport"> Pojď si zasportovat... </h2>
                <section class="rodic_sport">
      	             <a class="sporty badminton" href="oddil_badminton.php">    </a>
      	             <a class="sporty nohejbal" taget="_blank" href="http://doubravka-nohejbal.blog.cz/">    </a>
      	             <a class="sporty ping" href="oddil_stolnitenis.php">    </a>
                     <a class="sporty volejbal" href="oddil_volejbal.php">    </a>

                </section>
            </div>

            <div class="aktuality_container">
                     <h2 id="kde">Naše aktuality</h2>
                     <div class="flex_aktualita">
                     <?php

                       require_once("in/pripojeni_db.php"); //pripojeni databaze

                       require_once("in/functions.php");

                       select_akt_index($conn);

                      ?>
                    </div>
                    <a class="info_aktualita" href="aktuality.php"> Zobrazit další aktuality </a>
                    <h2 id="kde" style="margin-top: 65px;">Nejbližší akce</h2>
                    <div class="flex_akce">

                    <?php

                      require_once("in/pripojeni_db.php"); //pripojeni databaze

                      require_once("in/functions.php");

                      select_akce_index($conn);

                     ?>
                   </div>
                   <a class="info_aktualita" href="akce.php"> Zobrazit další akce </a>
            </div>

            <div class="map_container">
                     <h2 id="kde"> Kde nás najdeš? </h2>
                     <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.975249574112!2d13.425583741174702!3d49.755220828845694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x135804b4242cac6f!2sT%C4%9Blocvi%C4%8Dn%C3%A1+jednota+Sokol+Plze%C5%88+-+Doubravka!5e1!3m2!1scs!2scz!4v1517077660363" width="1000" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>


            <div class="social_container">
                <h2 class="like">Dej nám <img src="img/ezgif-4-8ea70230be.gif" alt="like" width="30px"> nebo <img src="img/ezgif-4-1a3bb8f6b6.gif" alt="srdicko" width="30px"> </h2>
                <section class="rodic_social">
      	             <article class="flex_social fb">

                         <iframe id="fb" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsokoldoubravka&tabs=timeline&width=450&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="450" height="450" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>

                         <iframe id="fb_mobil" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsokoldoubravka&tabs=timeline&width=300&height=422&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="422" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                    </article>
      	             <article class="flex_social fb_info">
                       <!--  <h2> Všechny informace se dozvíš tady! </h2> -->
                         <p>
                         <img id="clen" src="img/001-quality.svg" alt="člen" width="40px" height="40px">
                         Sportovní vyžití ve sportovních oddílech T.J. Sokol Doubravka, stanete-li se naším členem.
                         </p>

                         <p>
                        <img id="kalendar" src="img/002-calendar.svg" alt="kalendar" width="40px" height="40px">
                        Sportování s přáteli, využijete-li jednorázové či dlouhodobé pronájmy našich sportovišť.
                         </p>

                         <p>
                        <img id="ruce" src="img/002-business.svg" alt="ruce" width="40px" height="40px">
                        Sportovní dny pro firmy, které pro vás zajistíme a ušijeme přesně podle vašich požadavků.
                         </p>


                    </article>
                </section>
            </div>
            <div>
            <a class="historie_clik_container" href="historie.php">
              <h2 id="historie_hl"> Trošku historie </h2>
            </a>




              </div>
          </section>





  <!---------------------------------------------------------------------------------------------------------------------->

  <?php require_once("footer.php"); ?>



</html>
