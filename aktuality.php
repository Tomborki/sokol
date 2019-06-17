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
        <div class="flex_aktualita">
      <?php

      all_aktuality($conn);

       ?>
       </div>
      </div>

      </section>








    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <?php require_once("footer.php"); ?>



</html>
