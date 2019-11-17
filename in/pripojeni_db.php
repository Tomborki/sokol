<?php

/*

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sokoldoubrav6618";

*/

$servername = "wm136.wedos.net";
$username = "w28521_new";
$password = "Tomborki26010*";
$dbname = "d28521_new";



  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_query($conn, "SET CHARACTER SET UTF8");

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }


 ?>
