<?php

  // Connection information
  // if local area : localhost , or remote : IP address
  $servername = "localhost";
  $username = "USERNAME";
  $password = "PASSWORD";
  $dbname = "DATABASE_NAME";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>
