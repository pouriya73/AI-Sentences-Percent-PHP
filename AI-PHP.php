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

    //Variable to change the status and stabilize the status    
    $flag = 0 ;

    //In this step, we can analyze the desired text.
    //For example, here we tried to separate the names of the images 
    //in the file and they are without extensions.
    //For example  : image.jpeg => image   
    $file = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);

    // image => IMAGE (Optional)    
    $string_search = strtoupper($file); 
     
      //It loops the desired text that is read from the file
      //Compares by percentage.
      for($counter=0;$counter<=$lines;$counter++){
      $sim = similar_text($content[$counter],$string_search, $perc);
      // % 0٪ -> 100%
      if($perc>90){

        $sql = "INSERT INTO TABLE (column1,column2,column3)
        VALUES ('data', 'data', 'data')";
        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
        $flag = 1;
        }
      }
      }
   
      
  if(!$flag){echo "No results found"."<br>";}
  
      }
    closedir($dh);
  }
} 
?>
