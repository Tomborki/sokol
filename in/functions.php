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













 ?>
