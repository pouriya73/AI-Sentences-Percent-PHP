<?php

  // Connection information
  // if local area : localhost , or remote : IP address
  $servername = "localhost";
  $username = "USERNAME";
  $password = "PASSWORD";
  $dbname = "DATABASE_NAME";
  
  // Use MYSQL -we used MYSQLi Connection - you able to use PDO
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

//In this section, you can use the file.
//Or get information from the database . 
//Or via the POST and GET method . 
$dir = "directory/";

//File name and file extension
$file2 = "nameFile.txt";

//Determine the number of lines used in the file
// function count()
$lines = count(file($file2));

//Insert file information into an internal variable
$content = file('nameFile.txt');


// Open a directory, and read its contents
if (is_dir($dir)){
  
  //Checking the correctness of the information call
  if ($dh = opendir($dir)){
    
    //Create a loop and read each line in the file
    while (($file = readdir($dh)) !== false){





?>
