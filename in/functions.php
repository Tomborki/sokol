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

    $sql = "SELECT nazev, upoutavka, kategorie FROM aktuality ORDER BY id DESC LIMIT 4";
    $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_assoc($result)) {

           $nazev = $row["nazev"];
           $upoutavka = $row["upoutavka"];
           $kategorie = $row["kategorie"];

           echo "<a href='#' class='aktualita_article'>";

           echo "<h3 class='aktualita_nadpis'>"  . $nazev .  "</h3>";

           echo  $upoutavka . "<br>";

           echo "<span class='aktualita_small_info'>" . $kategorie . "</span>";

           echo "</a>";

            }

       echo "</table>";



   }


   // ----------------------------------------------------------------------------------------------


   function select_all_records($conn){

     $sql = "SELECT id, nazev FROM aktuality";
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

              echo "<tr>";

              echo "<td>" . $id . "<td>" . "xd" . "<td>" . $nazev;

              echo "<td>";
              echo "<a href='mysql/odebrani_aktuality.php?odstranit=$id'>Odstranit</a>";  // odstraneni
              echo "/";
              echo "<a href='upraveni_aktuality.php?upravit=$id'>Upravit</a>";   //upraveni


              echo "<tr>";

               }

          echo "</table>";


    }





 ?>
