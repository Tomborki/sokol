<?php

//-----------------------Overeni---------------------------------------------------------

    function overeni ($jmeno_form, $heslo_form, $conn){

      $sql = "SELECT id, jmeno, heslo, prave_jmeno, prave_prijmeni FROM uziv";
      $result = mysqli_query($conn, $sql);

         while($row = mysqli_fetch_assoc($result)) {

           $uzivatel = $row["jmeno"];
           $heslo = $row["heslo"];
           $prave_jmeno = $row["prave_jmeno"];
           $prave_prijmeni = $row["prave_prijmeni"];

           if (($uzivatel == $jmeno_form) && ($heslo == $heslo_form)){

                $_SESSION["uziv"] = $uzivatel;
                $_SESSION["heslo"] = $heslo;
                $_SESSION["prave_jmeno"] = $prave_jmeno;
                $_SESSION["prave_prijmeni"] = $prave_prijmeni;
                  header("Location: home.php");

               }
           }

           echo "<p class='chyba_form'> Nesprávné heslo nebo uživatelské jméno! </p>";
        }


//-----------------------Pripojeni DB---------------------------------------------------------

    function pripojeni_db(){

    $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "myDB";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      };



    }

// ----------------------------------------------------------------------------------------------

  function select_akt_index($conn){

    $sql = "SELECT id, nazev, dulezite, upoutavka, kategorie, time, url, obr0 FROM aktuality ORDER BY id DESC LIMIT 4";
    $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_assoc($result)) {

         $id_aktuality = $row["id"];
         $nazev = $row["nazev"];
         $dulezite = $row["dulezite"];
         $upoutavka = $row["upoutavka"];
         $kategorie = $row["kategorie"];
         $prevod_datum = explode("-", $row["time"]);
         $datum = $prevod_datum[2] . "." . $prevod_datum[1] . "." . $prevod_datum[0];
         $obr0 = $row["obr0"];
         $url = $row["url"];

         if($url == ""){
           echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_article'>";
         } else {
           echo "<a href='" . $url . "' target='_blank' class='aktualita_article'>";
         }

           if($obr0 != ""){
              echo '<img id="aktuality_index_obr" src="in/img/aktuality/thum/' . $obr0 . '">';
           }

           echo "<h3 class='aktualita_nadpis'>"  . $nazev .  "</h3>";

           echo $upoutavka;

           echo "<span class='aktualita_small_info'>" . $kategorie . " | " . $datum ."</span><br>";

           if($dulezite == "ano"){
             echo "<div id='dulezite_div'><img id='dulezite_img' src='img/dulezite.png'><p><strong>DŮLEŽITÉ!</strong></p></div>" ;
           }

           echo "</a>";

            }


   }

// ----------------------------------------------------------------------------------------------

   function select_akce_index($conn){

     $dneska = date("Y-m-d");
     $aktualniRok = date("Y");
     $aktualniDen = date("d");
     $dneskaMesic = explode("-", date("Y-m-d"));
     $mesicPlusJeden = $dneskaMesic[1] + 1;

     if($dneskaMesic[1] == "01" OR "02" OR "03" OR "04" OR "05" OR "06" OR "07" OR "08" OR "09"){
       $datumOMesic = $aktualniRok . "-0" . $mesicPlusJeden . "-" . $aktualniDen;
     } else {$datumOMesic = $aktualniRok . "-" . $mesicPlusJeden . "-" . $aktualniDen;}


     $sql = "SELECT id, nazev, datum FROM akce WHERE datum >= '$dneska' AND datum <= '$datumOMesic' ORDER BY datum";
     $result = mysqli_query($conn, $sql);

              while($row = mysqli_fetch_assoc($result)) {

                $id_akce = $row["id"];
                $nazev = $row["nazev"];
                $datum = explode("-", $row["datum"]);  // 0 = rok , 1 = mesic , 2 = den
                switch ($datum[1]) {
                    case "01":
                        $datum_mesic_slovy = "Leden";
                        break;
                    case "02":
                        $datum_mesic_slovy = "Únor";
                        break;
                    case "03":
                        $datum_mesic_slovy = "Březen";
                        break;
                    case "04":
                        $datum_mesic_slovy = "Duben";
                        break;
                    case "05":
                        $datum_mesic_slovy = "Květen";
                        break;
                    case "06":
                        $datum_mesic_slovy = "Červen";
                        break;
                    case "07":
                        $datum_mesic_slovy = "Červenec";
                        break;
                    case "08":
                        $datum_mesic_slovy = "Srpen";
                        continue;
                    case "09":
                        $datum_mesic_slovy = "Září";
                        continue;
                    case "10":
                        $datum_mesic_slovy = "Říjen";
                        continue;
                    case "11":
                        $datum_mesic_slovy = "Listopad";
                        break;
                    case "12":
                        $datum_mesic_slovy = "Prosinec";
                        break;
                }

                  echo "<a href='akce_detail.php?akce=" . $id_akce . "' class='index_akce_article'>";

                  echo '<div id="index_akce_datum">';
                  echo '<p class="mesic_slovy">' . $datum_mesic_slovy . '</p>';
                  echo '<p class="cislo_dne_akce">' . $datum[2] . '</p>';
                  echo '</div>';

                  echo "<h3 class='index_akce_nazev'>"  . $nazev .  "</h3>";

                  echo '<p class="male_info_akce">Pro více informací rozklikni</p>';

                  echo "</a>";

            }

    }


    // ----------------------------------------------------------------------------------------------

       function select_akce_vsechny_bud($conn){

         $dneska = date("Y-m-d");
      /*   $aktualniRok = date("Y");
         $aktualniDen = date("d");
         $dneskaMesic = explode("-", date("Y-m-d"));
         $mesicPlusJeden = $dneskaMesic[1] + 1;

         if($dneskaMesic[1] == "01" OR "02" OR "03" OR "04" OR "05" OR "06" OR "07" OR "08" OR "09"){
           $datumOMesic = $aktualniRok . "-0" . $mesicPlusJeden . "-" . $aktualniDen;
         } else {$datumOMesic = $aktualniRok . "-" . $mesicPlusJeden . "-" . $aktualniDen;} */


         $sql = "SELECT id, nazev, datum FROM akce WHERE datum >= '$dneska' ORDER BY datum";
         $result = mysqli_query($conn, $sql);

                  while($row = mysqli_fetch_assoc($result)) {

                    $id_akce = $row["id"];
                    $nazev = $row["nazev"];
                    $datum = explode("-", $row["datum"]);  // 0 = rok , 1 = mesic , 2 = den
                    switch ($datum[1]) {
                        case "01":
                            $datum_mesic_slovy = "Leden";
                            break;
                        case "02":
                            $datum_mesic_slovy = "Únor";
                            break;
                        case "03":
                            $datum_mesic_slovy = "Březen";
                            break;
                        case "04":
                            $datum_mesic_slovy = "Duben";
                            break;
                        case "05":
                            $datum_mesic_slovy = "Květen";
                            break;
                        case "06":
                            $datum_mesic_slovy = "Červen";
                            break;
                        case "07":
                            $datum_mesic_slovy = "Červenec";
                            break;
                        case "08":
                            $datum_mesic_slovy = "Srpen";
                            continue;
                        case "09":
                            $datum_mesic_slovy = "Září";
                            continue;
                        case "10":
                            $datum_mesic_slovy = "Říjen";
                            continue;
                        case "11":
                            $datum_mesic_slovy = "Listopad";
                            break;
                        case "12":
                            $datum_mesic_slovy = "Prosinec";
                            break;
                    }

                      echo "<a href='akce_detail.php?akce=" . $id_akce . "' class='index_akce_article'>";

                      echo '<div id="index_akce_datum">';
                      echo '<p class="mesic_slovy">' . $datum_mesic_slovy . '</p>';
                      echo '<p class="cislo_dne_akce">' . $datum[2] . '</p>';
                      echo '</div>';

                      echo "<h3 class='index_akce_nazev'>"  . $nazev .  "</h3>";

                      echo '<p class="male_info_akce">Pro více informací rozklikni</p>';

                      echo "</a>";

                }

        }


// ----------------------------------------------------------------------------------------------

   function select_akce_vsechny_uplynule($conn){

     $dneska = date("Y-m-d");

     $sql = "SELECT id, nazev, datum FROM akce WHERE datum <= '$dneska'";
     $result = mysqli_query($conn, $sql);

                echo "<table class='probehle_akce'>";

                while($row = mysqli_fetch_assoc($result)) {

                $id_akce = $row["id"];
                $nazev = $row["nazev"];
                $datum = explode("-", $row["datum"]);  // 0 = rok , 1 = mesic , 2 = den
                $datum_prevedeno = $datum[2] . "." . $datum[1] . "." . $datum[0];

              //    echo "<a href='akce_detail.php?akce=" . $id_akce . ">";

                  echo '<tr>';
                  echo "<td style='border-left: 5px solid red; padding: 13px;'>" . $datum_prevedeno . "<td class='nazev_probehle'>" . $nazev;
                  echo "<td class='s_obrazkem'><a href='akce_detail.php?akce=" . $id_akce . "'> <img src='img/information.svg' alt='informace'> </a>" ;
                  echo '</tr>';

            //      echo "</a>";

            }

            echo "</table>";

    }




   // ----------------------------------------------------------------------------------------------


   function select_all_records_in($conn){

     $sql = "SELECT id, nazev, videno, time, dulezite FROM aktuality ORDER BY id DESC ";
     $result = mysqli_query($conn, $sql);

          echo "<table>";
          echo "<tr>";
          echo "<th> ID </th>";
          echo "<th> Datum </th>";
          echo "<th> Název </th>";
          echo "<th> Důležité </th>";
          echo "<th> Viděno </th>";
          echo "<th> Odstranit/Upravit </th>";
          echo "</tr>";

          while($row = mysqli_fetch_assoc($result)) {

              $id = $row["id"];
              $nazev = $row["nazev"];
              $time = explode("-", $row["time"]);
              $datum_prevedeno = $time[2] . "." . $time[1] . "." . $time[0];
              $videno = $row["videno"];
              $dulezite = $row["dulezite"];

              echo "<tr>";

              echo "<td style='border-left: 5px solid red; padding: 13px;'>" . $id . "<td>" . $datum_prevedeno . "<td>" . $nazev . "<td>" . $dulezite;
              echo "<td>" . $videno . "x";

              echo "<td>";
              echo "<a onclick='return confirm(\"Opravdu chceš odstranit aktualitu?\")' href='mysql/odebrani_aktuality.php?odstranit=$id'><img style='margin-right:10px;' width='20px' src='img/kos.svg'></a>";  // odstraneni
              echo "  /  ";
              echo "<a href='upraveni_aktuality.php?upravit=$id'><img style='margin-left:10px;' width='20px' src='img/edit.svg'></a>";   //upraveni

              echo "</tr>";

               }

          echo "</table>";

          echo '<script>
                function myFunction() {
                  var txt;
                  var r = confirm("Opravdu chceš odstranit aktualitu?");
                  if (r == true) {

                  } else {
                    window.location = "home.php";
                  }

                }
                </script>';


    }

    // ----------------------------------------------------------------------------------------------


    function vypis_aktuality_stranka($conn, $id_aktuality){

      $sql = "SELECT id, nazev, kategorie, obsah, videno, obr0, obr1, obr2, time FROM aktuality WHERE id='$id_aktuality'";
      $result = mysqli_query($conn, $sql);

           while($row = mysqli_fetch_assoc($result)) {

               $id = $row["id"];
               $nazev = $row["nazev"];
               $kategorie = $row["kategorie"];
               $obsah = $row["obsah"];
               $prevod_datum = explode("-", $row["time"]);
               $datum = $prevod_datum[2] . "." . $prevod_datum[1] . "." . $prevod_datum[0];
               $videno = $row["videno"] + 1;
               $sql_videno = "UPDATE aktuality SET videno='$videno'  WHERE id=$id_aktuality";
               mysqli_query($conn, $sql_videno);
               $obr0 = $row["obr0"];
               $obr1 = $row["obr1"];
               $obr2 = $row["obr2"];

               echo "<h3 id='nazev_aktuality'>" . $nazev ."</h3>";
               echo "<p><i>Kategorie: " . $kategorie ."</i></p>";
               echo "<span id='aktualita_obsah'>" . $obsah ."</span>";
               echo "<p><i>Datum vložení: " . $datum ." | Zobrazeno: " . $videno . "x</i> </p>";
               echo '<div class="obr_aktuality_detail">';
               if ($obr0 != ""){
                  echo '<a href="in/img/aktuality/' . $obr0 . '" data-lightbox="' . $nazev . '" data-title="' . $nazev . '"><img class="img_detail img_klikatelne" src="in/img/aktuality/thum/' . $obr0 . '"></a>';
               }

               if ($obr1 != ""){
                  echo '<a href="in/img/aktuality/' . $obr1 . '" data-lightbox="' . $nazev . '" data-title="' . $nazev . '"><img class="img_detail img_klikatelne" src="in/img/aktuality/thum/' . $obr1 . '"></a>';
               }

               if ($obr2 != ""){
                  echo '<a href="in/img/aktuality/' . $obr2 . '" data-lightbox="' . $nazev . '" data-title="' . $nazev . '"><img class="img_detail img_klikatelne" src="in/img/aktuality/thum/' . $obr2 . '"></a>';
               }
               echo '</div>';


     }

}



// ----------------------------------------------------------------------------------------------


function vypis_akce_stranka($conn, $id_akce){

  $sql = "SELECT id, nazev, datum, casOd, casDo, misto, url_misto, obsah FROM akce WHERE id='$id_akce'";
  $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_assoc($result)) {

           $id = $row["id"];
           $nazev = $row["nazev"];
           $prevod_datum = explode("-", $row["datum"]);
           $datum = $prevod_datum[2] . "." . $prevod_datum[1] . "." . $prevod_datum[0];
           $casOd = $row["casOd"];
           $casDo = $row["casDo"];
           $misto = $row["misto"];
           $obsah = $row["obsah"];
           $url_misto = $row["url_misto"];

           echo '<div class="info_akce_detail">';
           echo "<h3>" . $nazev ."</h3>";
           echo "<p><img src='img/calendar-with-a-clock-time-tools.svg' alt='kalendář'>" . $datum . "</p>";
           echo "<p><img src='img/passage-of-time.svg' alt='čas'>" . $casOd . " - " . $casDo . "</p>";
           echo "<p><img src='img/facebook-placeholder-for-locate-places-on-maps.svg' alt='místo'>" . $misto . "</p>";
           if($url_misto != ""){
             echo "<p><a href='" . $url_misto . "' target='_blank'>Zobrazit na mapě</a></p>";
           }
           echo '</div>';
           echo '<div class="obsah_akce_detail">' . $obsah . '</div>';


 }

}

// ----------------------------------------------------------------------------------------------

  function select_aktuality($conn){

    $sql = "SELECT id, nazev, url, kategorie, time FROM aktuality ORDER BY id DESC LIMIT 4";
    $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_assoc($result)) {

         $id_aktuality = $row["id"];
         $nazev = $row["nazev"];
         $kategorie = $row["kategorie"];
         $datum = $row["time"];
         $url = $row["url"];

           if($url == ""){
             echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_aktuality_content'>";
           } else {
             echo "<a href='" . $url . "' target='_blank' class='aktualita_aktuality_content'>";
           }

           echo "<h3 class='aktualita_nadpis' style='font-size: 18px'>"  . $nazev .  "</h3>";

           echo "<span class='aktualita_aktuality_small_info'>" . $kategorie . " | " . $datum ."</span>";

           echo "</a>";

            }

   }

// ----------------------------------------------------------------------------------------------

   function select_all_records_in_akce($conn){

     $sql = "SELECT id, nazev, datum FROM akce ORDER BY datum DESC ";
     $result = mysqli_query($conn, $sql);

          echo "<table>";
          echo "<tr>";
          echo "<th> ID </th>";
          echo "<th> Datum </th>";
          echo "<th style='min-width: 500px;'> Název </th>";
          echo "<th> Odstranit/Upravit </th>";
          echo "</tr>";

          while($row = mysqli_fetch_assoc($result)) {

              $id = $row["id"];
              $nazev = $row["nazev"];
              $time = $row["datum"];

              echo "<tr>";

              echo "<td>" . $id . "<td>" . $time . "<td>" . $nazev;

              echo "<td>";
              echo "<a onclick='return confirm(\"Opravdu chceš odstranit akci?\")' href='mysql/odebrani_akce.php?odstranit=$id'>Odstranit</a>";  // odstraneni
              echo "/";
              echo "<a href='upraveni_akce.php?upravit=$id'>Upravit</a>";   //upraveni


              echo "<tr>";

               }

          echo "</table>";


    }

    // ----------------------------------------------------------------------------------------------

    function all_aktuality($conn){

      $sql = "SELECT id, nazev, url, dulezite, upoutavka, kategorie, time, obr0 FROM aktuality ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);

         while($row = mysqli_fetch_assoc($result)) {

           $id_aktuality = $row["id"];
           $nazev = $row["nazev"];
           $upoutavka = $row["upoutavka"];
           $kategorie = $row["kategorie"];
           $dulezite = $row["dulezite"];
           $prevod_datum = explode("-", $row["time"]);
           $datum = $prevod_datum[2] . "." . $prevod_datum[1] . "." . $prevod_datum[0];
           $obr0 = $row["obr0"];
           $url = $row["url"];

           if($url == ""){
             echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_article'>";
           } else {
             echo "<a href='" . $url . "' target='_blank' class='aktualita_article'>";
           }


             if($obr0 != ""){
                echo '<img id="aktuality_index_obr" src="in/img/aktuality/thum/' . $obr0 . '">';
             }

             echo "<h3 class='aktualita_nadpis'>"  . $nazev .  "</h3>";

             echo $upoutavka;

             echo "<span class='aktualita_small_info'>" . $kategorie . " | " . $datum ."</span>";

             if($dulezite == "ano"){
               echo "<div id='dulezite_div'><img id='dulezite_img' src='img/dulezite.png'><p><strong>DŮLEŽITÉ!</strong></p></div>" ;
             }

             echo "</a>";

              }


    }

// ----------------------------------------------------------------------------------------------

      function select_akce_nejblizsi($conn){

        $dneska = date("Y-m-d");
        $aktualniRok = date("Y");
        $aktualniDen = date("d");
        $dneskaMesic = explode("-", date("Y-m-d"));
        $mesicPlusJeden = $dneskaMesic[1] + 1;

        if($dneskaMesic[1] == "01" OR "02" OR "03" OR "04" OR "05" OR "06" OR "07" OR "08" OR "09"){
          $datumOMesic = $aktualniRok . "-0" . $mesicPlusJeden . "-" . $aktualniDen;
        } else {$datumOMesic = $aktualniRok . "-" . $mesicPlusJeden . "-" . $aktualniDen;}


        $sql = "SELECT id, nazev, datum FROM akce WHERE datum >= '$dneska' AND datum <= '$datumOMesic' ORDER BY datum";
        $result = mysqli_query($conn, $sql);

           while($row = mysqli_fetch_assoc($result)) {

             $id_akce = $row["id"];
             $nazev = $row["nazev"];
             $datum = explode("-", $row["datum"]);  // 0 = rok , 1 = mesic , 2 = den

               echo "<a href='akce_detail.php?akce=" . $id_akce . "' class='akce_article'>";

               echo '<div id="akce_datum">' . $datum[2] . '. ' . $datum[1] . '.</div>';

               echo "<h3 class='akce_nadpis'>"  . $nazev .  "</h3>";

               echo "</a>";

           }

       }

// ----------------------------------------------------------------------------------------------

       function select_aktuality_podle_kategorie($conn, $kategorie){


           $sql = "SELECT id, nazev, dulezite, upoutavka, kategorie, time, url, obr0 FROM aktuality WHERE kategorie = '$kategorie' ORDER BY id DESC";
           $result = mysqli_query($conn, $sql);


           if (mysqli_num_rows($result) > 0) {

              while($row = mysqli_fetch_assoc($result)) {

                $id_aktuality = $row["id"];
                $nazev = $row["nazev"];
                $dulezite = $row["dulezite"];
                $upoutavka = $row["upoutavka"];
                $kategorie = $row["kategorie"];
                $prevod_datum = explode("-", $row["time"]);
                $datum = $prevod_datum[2] . "." . $prevod_datum[1] . "." . $prevod_datum[0];
                $obr0 = $row["obr0"];
                $url = $row["url"];

                if($url == ""){
                  echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_article'>";
                } else {
                  echo "<a href='" . $url . "' target='_blank' class='aktualita_article'>";
                }

                  if($obr0 != ""){
                     echo '<img id="aktuality_index_obr" src="in/img/aktuality/thum/' . $obr0 . '">';
                  }

                  echo "<h3 class='aktualita_nadpis'>"  . $nazev .  "</h3>";

                  echo $upoutavka;

                  echo "<span class='aktualita_small_info'>" . $kategorie . " | " . $datum ."</span>";

                  if($dulezite == "ano"){
                    echo "<div id='dulezite_div'><img id='dulezite_img' src='img/dulezite.png'><p><strong>DŮLEŽITÉ!</strong></p></div>" ;
                  }

                  echo "</a>";

                   }
                    
            } else {
                echo "<p style='display: block; margin: auto; margin-bottom: 20px;'>Bohužel tady není žádná aktualita :(</p>";
            }

      }

// ----------------------------------------------------------------------------------------------

  function select_aktuality_podle_kategorie_a_data($conn, $kategorie, $od, $do){

      if($kategorie == "all"){

        $sql = "SELECT id, nazev, dulezite, upoutavka, kategorie, time, url, obr0 FROM aktuality WHERE time >= '$od' AND time <= '$do' ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

           while($row = mysqli_fetch_assoc($result)) {

             $id_aktuality = $row["id"];
             $nazev = $row["nazev"];
             $dulezite = $row["dulezite"];
             $upoutavka = $row["upoutavka"];
             $kategorie = $row["kategorie"];
             $prevod_datum = explode("-", $row["time"]);
             $datum = $prevod_datum[2] . "." . $prevod_datum[1] . "." . $prevod_datum[0];
             $obr0 = $row["obr0"];
             $url = $row["url"];

             if($url == ""){
               echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_article'>";
             } else {
               echo "<a href='" . $url . "' target='_blank' class='aktualita_article'>";
             }
               if($obr0 != ""){
                  echo '<img id="aktuality_index_obr" src="in/img/aktuality/thum/' . $obr0 . '">';
               }

               echo "<h3 class='aktualita_nadpis'>"  . $nazev .  "</h3>";

               echo $upoutavka;

               echo "<span class='aktualita_small_info'>" . $kategorie . " | " . $datum ."</span>";

               if($dulezite == "ano"){
                 echo "<div id='dulezite_div'><img id='dulezite_img' src='img/dulezite.png'><p><strong>DŮLEŽITÉ!</strong></p></div>" ;
               }

               echo "</a>";

                }

      }



  }

// ----------------------------------------------------------------------------------------------


      function sokolska_vsestrannost($conn, $oddil){



            $sql = "SELECT id, $oddil FROM sv";
            $result = mysqli_query($conn, $sql);

               while($row = mysqli_fetch_assoc($result)) {

                 $sv_oddil = $row[$oddil];

                 echo $sv_oddil;

                    }


      }





 ?>
