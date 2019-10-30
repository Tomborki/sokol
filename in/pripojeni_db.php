<?php


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sokoldoubrav6618";


/*

  $servername = "sql2.webzdarma.cz";
  $username = "sokoldoubrav6618";
  $password = "Slhbcgt";
  $dbname = "sokoldoubrav6618";
*/


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_query($conn, "SET CHARACTER SET UTF8");

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }


 ?>
