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
    <link href="https://fonts.googleapis.com/css?family=Charm:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="swiper-4.3.3/dist/css/swiper.min.css">



    </head>

      <?php require_once("header.php"); ?>

          <!-- ---------------------------------------------------------------------------------------------------------------- -->

          <div class="info_sv">

<h2 id="napis_sv"> Domácí cvičení</h2>

<p class="predmluva_sv" style="text-align: center; margin-top: 30px;">Milí sportovní přátelé,<br>
může se stát, že okolnosti zrovna nepřejí tomu zasportovat si v tělocvičně, sejít se na hřišti se svými spoluhráči nebo se věnovat jiné pravidelné sportovní aktivitě. Ať už jste přímo členy našeho spolku nebo jen procházíte náhodou kolem, využijte některou z rad, nabídek nebo inspirací na cvičení v domácích podmínkách a s využitím běžně dostupného vybavení. A pokud vše ještě doplníte vlastní hravou fantazií a sportovním nadšením, nemůže to dopadnout jinak než skvěle!</p>
<div class="obsah_sv">
<button class="collapsible">Předškolní děti</button>
  <div class="content">

    <a href="doc/domaciCviceni/myska1.pdf" target="_blank">Myška 1 <img src="img/external.png" alt="external"></a>
    <a href="doc/domaciCviceni/myska2.pdf" target="_blank">Myška 2 <img src="img/external.png" alt="external"></a>

  </div>

</div>

</div>

<p class="predmluva_sv" style="text-align: center; margin-top: 30px;">Další cvičení budeme průběžně přídávat!</p>




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









  <!-- ------------------------------------------------------------------------------------------------------------------ -->

  <?php require_once("footer.php"); ?>



</html>
