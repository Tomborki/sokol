<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sokol Doubravka</title>
    <link href="css/12cols.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
    <link href="css/aktualita_detail.css" rel="stylesheet">
    <link href="css/media_1000px.css" rel="stylesheet">
    <link href="css/media_520px.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link rel="stylesheet" href="swiper-4.3.3/dist/css/swiper.min.css">
    <link href="lightbox/dist/css/lightbox.css" rel="stylesheet">

<link rel="icon" href="img/favicon-sokol.png" sizes="20x20">

    </head>

      <?php require_once("header.php");

      require_once("in/pripojeni_db.php");
      require_once("in/functions.php");?>

      <div class="aktuality_container">
        <h2 id="kde">Všechny aktuality</h2>
        <form class="form_filter" action="aktuality.php" method="post"  enctype="multipart/form-data">
          <div class="inputs_aktuality">
            <label for="kategorie">Kategorie: </label>
            <select class="kategorie_vyber_aktualit" name="kategorie">
                  <option value="vsechny">Všechny</option>
                  <option value="sokol">Sokol</option>
                  <option value="badminton">Badminton</option>
                  <option value="sokolská všesrannost">Sokolská všestrannost</option>
                  <option value="volejbal">Volejbal</option>
            </select>
            <label for="od">Časové období od: </label>
            <input type="date" name="od" value="value=">
            <label for="od">do: </label>
            <input type="date" name="do" value="">
            <input type="submit" name="submit" value="Filtrovat">
          </div>
        <div class="flex_aktualita">

      <?php

        if(isset($_POST['kategorie'])){

            $kategorie = $_POST['kategorie'];
            $od = $_POST['od'];
            $do = $_POST['do'];

            if($kategorie == "vsechny"){

                  if(($od == "") AND ($do == "")){

                    all_aktuality($conn);

                  } else {

                    if($od != ""){
                      $od = explode("-", $_POST['od']); // 0= rok, 1= mesic, 2=den
                      $od_prevedene = $od[0] . "-" . $od[1] . "-" . $od[2];

                      if($do != ""){
                        $do = explode("-", $_POST['do']); // 0= rok, 1= mesic, 2=den
                        $do_prevedene = $do[0] . "-" . $do[1] . "-" . $do[2];
                        select_aktuality_podle_kategorie_a_data($conn, "all", $od_prevedene, $do_prevedene);
                      } else {
                        select_aktuality_podle_kategorie_a_data($conn, "all", $od_prevedene, date("Y-m-d"));
                        }

                    }







                  }



            } else {select_aktuality_podle_kategorie($conn, $kategorie);}



        } else {all_aktuality($conn);}






       ?>
       </div>
      </div>

      </section>








    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <?php require_once("footer.php"); ?>



</html>
