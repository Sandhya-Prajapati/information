<?php
  ini_set("display_errors", TRUE);
      error_reporting(E_ALL);
      $servername = "localhost";
      $username = "root";
      $password1 = "anktech@123";
      $dbname = "sandhya"; 
      $conn = new mysqli($servername, $username, $password1, $dbname);

      if ($conn->connect_error) 
       {
         die("Connection failed: " . $conn->connect_error);
       }

      $sql1="drop table MyGuests";
      $conn->query($sql1) or die ($conn->error);


?>