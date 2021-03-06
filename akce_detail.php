<!DOCTYPE html>
<html>
    <head>

    <?php require_once("meta.php"); ?>

    <link href="css/12cols.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
    <link href="css/aktualita_detail.css" rel="stylesheet">
    <link href="css/media_1000px.css" rel="stylesheet">
    <link href="css/media_520px.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link rel="stylesheet" href="swiper-4.3.3/dist/css/swiper.min.css">
    <link href="lightbox/dist/css/lightbox.css" rel="stylesheet">

    </head>


      <?php require_once("header.php");

      require_once("in/pripojeni_db.php");
      require_once("in/functions.php");?>


      <section class="aktualita_section">
      <h2 id="aktualita_h2">Detail akce</h2>
      <div class="akce_detail">
          <?php vypis_akce_stranka($conn, $_GET["akce"]);  ?>
      </div>
      </section>
      <section class="aktualita_aktuality">
        <div>
          <h4>Nejbližší akce</h4>
          <?php select_akce_nejblizsi($conn) ?>
          <a class="info_aktualita" href="akce.php"> Zobrazit všechny akce </a>
        </div>
        <div>
          <h4>Nejnovější aktuality</h4>
          <?php select_aktuality($conn) ?>
          <a class="info_aktualita" href="aktuality.php"> Zobrazit další aktuality </a>
        </div>

      </section>








    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <?php require_once("footer.php"); ?>



</html>
