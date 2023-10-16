<?php
  $hostname = "localhost";
  $username = "id21405222_khaue";
  $password = "Cadernocaneta1!";
  $dbname = "id21405222_okapi";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
