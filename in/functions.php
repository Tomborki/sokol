<?php

//-----------------------Overeni---------------------------------------------------------

    function overeni ($username, $password){

        include "users.php";

        $pocet_uzivatelu = count($username_data);



        for ($x = 0; $x < $pocet_uzivatelu; $x++){

            if ($username_data[$x] == $username){

                if ($password_data[$x] == $password){

                    header("Location: home.php");

                }

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

  function select_index($conn){

    $sql = "SELECT id, nazev, upoutavka, kategorie, time, obr0 FROM aktuality ORDER BY id DESC LIMIT 4";
    $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_assoc($result)) {

         $id_aktuality = $row["id"];
         $nazev = $row["nazev"];
         $upoutavka = $row["upoutavka"];
         $kategorie = $row["kategorie"];
         $datum = $row["time"];
         $obr0 = $row["obr0"];

           echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_article'>";

           if($obr0 != ""){
              echo '<img id="aktuality_index_obr" src="in/img/aktuality/thum/' . $obr0 . '">';
           }

           echo "<h3 class='aktualita_nadpis'>"  . $nazev .  "</h3>";

           echo $upoutavka;

           echo "<span class='aktualita_small_info'>" . $kategorie . " | " . $datum ."</span>";

           echo "</a>";

            }


   }


   // ----------------------------------------------------------------------------------------------


   function select_all_records_in($conn){

     $sql = "SELECT id, nazev, time FROM aktuality ORDER BY id DESC ";
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
              $time = $row["time"];

              echo "<tr>";

              echo "<td>" . $id . "<td>" . $time . "<td>" . $nazev;

              echo "<td>";
              echo "<a onclick='return confirm(\"Opravdu chceš odstranit aktualitu?\")' href='mysql/odebrani_aktuality.php?odstranit=$id'>Odstranit</a>";  // odstraneni
              echo "/";
              echo "<a href='upraveni_aktuality.php?upravit=$id'>Upravit</a>";   //upraveni


              echo "<tr>";

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

      $sql = "SELECT nazev, kategorie, obsah, obr0, obr1, obr2, time FROM aktuality WHERE id='$id_aktuality'";
      $result = mysqli_query($conn, $sql);

           while($row = mysqli_fetch_assoc($result)) {

               $nazev = $row["nazev"];
               $kategorie = $row["kategorie"];
               $obsah = $row["obsah"];
               $time = $row["time"];
               $obr0 = $row["obr0"];
               $obr1 = $row["obr1"];
               $obr2 = $row["obr2"];

               echo "<h3>" . $nazev ."</h3>";
               echo "<p><i>Kategorie: " . $kategorie ."</i></p>";
               echo "<span id='aktualita_obsah'>" . $obsah ."</span>";
               echo "<p><i>Datum vložení: " . $time ."</i></p>";
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

  function select_aktuality($conn){

    $sql = "SELECT id, nazev, kategorie, time FROM aktuality ORDER BY id DESC LIMIT 4";
    $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_assoc($result)) {

         $id_aktuality = $row["id"];
         $nazev = $row["nazev"];
         $kategorie = $row["kategorie"];
         $datum = $row["time"];

           echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_aktuality_content'>";

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

      $sql = "SELECT id, nazev, upoutavka, kategorie, time, obr0 FROM aktuality ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);

         while($row = mysqli_fetch_assoc($result)) {

           $id_aktuality = $row["id"];
           $nazev = $row["nazev"];
           $upoutavka = $row["upoutavka"];
           $kategorie = $row["kategorie"];
           $datum = $row["time"];
           $obr0 = $row["obr0"];

             echo "<a href='aktualita_detail.php?aktualita=" . $id_aktuality . "' class='aktualita_article'>";

             if($obr0 != ""){
                echo '<img id="aktuality_index_obr" src="in/img/aktuality/thum/' . $obr0 . '">';
             }

             echo "<h3 class='aktualita_nadpis'>"  . $nazev .  "</h3>";

             echo $upoutavka;

             echo "<span class='aktualita_small_info'>" . $kategorie . " | " . $datum ."</span>";

             echo "</a>";

              }


    }

    // ----------------------------------------------------------------------------------------------

      function select_akce($conn){

        $dneska = date("Y-m-d");
        $aktualniRok = date("Y");
        $aktualniDen = date("d");
        $dneskaMesic = explode("-", date("Y-m-d"));
        $mesicPlusJeden = $dneskaMesic[1] + 1;

        $datumOMesic = $aktualniRok . "-0" . $mesicPlusJeden . "-" . $aktualniDen;

        $sql = "SELECT id, nazev, datum FROM akce WHERE datum >= '$dneska' AND datum <= '$datumOMesic' ORDER BY datum";
        $result = mysqli_query($conn, $sql);

           while($row = mysqli_fetch_assoc($result)) {

             $id_akce = $row["id"];
             $nazev = $row["nazev"];
             $datum = explode("-", $row["datum"]);  // 0 = rok , 1 = mesic , 2 = den

               echo "<a href='#' class='akce_article'>";

               echo '<div id="akce_datum">' . $datum[2] . '. ' . $datum[1] . '.</div>';

               echo "<h3 class='akce_nadpis'>"  . $nazev .  "</h3>";

               echo "</a>";

           }

       }





 ?>
