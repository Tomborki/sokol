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

<link rel="icon" href="img/favicon-sokol.png" sizes="20x20">

    </head>


      <?php require_once("header.php");

      require_once("in/pripojeni_db.php");
      require_once("in/functions.php");?>


      <section class="aktualita_section">
      <h2 class="aktualita_h2">Detail aktuality</h2>
      <div class="aktualita_detail">
          <?php vypis_aktuality_stranka($conn, $_GET["aktualita"]);  ?>
      </div>
      </section>
      <section class="aktualita_aktuality">
        <div>
          <h4>Nejbližší akce</h4>
          <?php select_aktuality($conn) ?>
        </div>
        <div>
          <h4>Nejnovější aktuality</h4>
          <?php select_aktuality($conn) ?>
        </div>

      </section>









    <?php require_once("footer.php"); ?>



</html>
