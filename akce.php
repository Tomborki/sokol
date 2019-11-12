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
    <script type="text/javascript" src="https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js"></script>
    <link href="lightbox/dist/css/lightbox.css" rel="stylesheet">



    </head>

      <?php require_once("header.php");

      require_once("in/pripojeni_db.php");
      require_once("in/functions.php");?>

      <div class="aktuality_container">
        <h2 id="kde">Všechny akce</h2>
        <div class="obsah_akce">
        <div class="kalendar_container">
            <h3 id="kalendar_nadpis">Nadcházející akce v měsíci <?php

            $datum_mesic = date("m");

            switch ($datum_mesic) {
                case "01":
                    echo "Leden";
                    break;
                case "02":
                    echo "Únor";
                    break;
                case "03":
                    echo "Březen";
                    break;
                case "04":
                    echo "Duben";
                    break;
                case "05":
                    echo "Květen";
                    break;
                case "06":
                    echo "Červen";
                    break;
                case "07":
                    echo "Červenec";
                    break;
                case "08":
                    echo "Srpen";
                    continue;
                case "09":
                    echo "Září";
                    continue;
                case "10":
                    echo "Říjen";
                    continue;
                case "11":
                    echo "Listopad";
                    break;
                case "12":
                    echo "Prosinec";
                    break;
            }


             ?></h3>

              <table class="kalendar">
                <tr>
                  <th>Po</th>
                  <th>Út</th>
                  <th>St</th>
                  <th>Čt</th>
                  <th>Pá</th>
                  <th>So</th>
                  <th>Ne</th>
                </tr>
                <?php

    // ------------------------------------------------------- Zjiseni data akce -------------------------------------

                $sql = "SELECT id, nazev, datum, casOd, casDo, misto, url_misto, obsah FROM akce";
                $result = mysqli_query($conn, $sql);
                $datumy_akci = array();

                     while($row = mysqli_fetch_assoc($result)) {

                       $id_akce = $row["id"];
                       $datum = $row["datum"] . "-" . $id_akce;
                       array_push($datumy_akci, $datum);

                    }
    // ------------------------------------------------------- Zjiseni data akce -------------------------------------

    // ------------------------------------------------------- Dny v aktuálním měsíci -------------------------------------

                $list=array();
                $month = date("m");
                $year = date("Y");

                for($d=1; $d<=31; $d++)
                {
                    $time=mktime(12, 0, 0, $month, $d, $year);
                    if (date('m', $time)==$month)
                        $list[]=date('Y-m-d-D', $time);
                }

    // ------------------------------------------------------- Dny v aktuálním měsíci -------------------------------------

    // ------------------------------------------------------- Odřádkování prvního týdne v měsíci -------------------------------------

                $pruchod = 0;
                foreach ($list as $jeden_den) {
                  $den_v_mesici = explode("-", $jeden_den);

                  if($pruchod == 0){
                    if($den_v_mesici[3] == "Tue"){
                      for($i = 0; $i < 1; $i++){
                        echo "<td>";
                      }
                    }
                    if($den_v_mesici[3] == "Wed"){
                      for($i = 0; $i <= 1; $i++){
                        echo "<td>";
                      }
                    }
                    if($den_v_mesici[3] == "Thu"){
                      for($i = 0; $i <= 2; $i++){
                        echo "<td>";
                      }
                    }
                    if($den_v_mesici[3] == "Fri"){
                      for($i = 0; $i <= 3; $i++){
                        echo "<td>";
                      }
                    }
                    if($den_v_mesici[3] == "Sat"){
                      for($i = 0; $i <= 4; $i++){
                        echo "<td>";
                      }
                    }
                    if($den_v_mesici[3] == "Sun"){
                      for($i = 0; $i <= 5; $i++){
                        echo "<td>";
                      }
                    }
                    $pruchod++;
                  }

    // ------------------------------------------------------- Odřádkování prvního týdne v měsíci -------------------------------------

    // ------------------------------------------------------- Výpis dní s vyznačením akce -------------------------------------
                  echo "<td>";

                foreach ($datumy_akci as $akce_data) {
                  $rozdeleny_akce = explode("-", $akce_data);
                  $rozdeleny_kalendar = explode("-", $jeden_den);
                  if($rozdeleny_akce[0] == $rozdeleny_kalendar[0] AND $rozdeleny_akce[1] == $rozdeleny_kalendar[1] AND $rozdeleny_akce[2] == $rozdeleny_kalendar[2]){
                    echo "<a href='akce_detail.php?akce=" . $rozdeleny_akce[3] . "' class='den_akce_v_kalendari'>" . $den_v_mesici[2] . "</a>";
                    if($den_v_mesici[3] == "Sun"){
                      echo "</tr>";
                      }
                    continue 2;
                  }
                }

                echo $den_v_mesici[2];


                  if($den_v_mesici[3] == "Sun"){
                  echo "</tr>";
                  }
                }

    // ------------------------------------------------------- Výpis dní s vyznačením akce -------------------------------------

                 ?>

              </table>
              <p>*po kliknutí na den zobrazený červeně, se otevře stránka s akcí, která se pořádé tentýž den</p>
            </div>
          <div class="bud_akce_container">
            <h3 id="kalendar_nadpis">Všechny budoucí akce</h3>
            <div class="bud_akce">
              <?php select_akce_vsechny_bud($conn); ?>
            </div>
          </div>
        </div>
        <div class="uplynule_akce">
          <h3 id="kalendar_nadpis">Proběhlé akce</h3>
          <?php select_akce_vsechny_uplynule($conn) ?>
        </div>
      </div>

      </section>








    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <?php require_once("footer.php"); ?>



</html>
