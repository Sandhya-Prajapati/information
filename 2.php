 <?php
  ini_set("display_errors", TRUE);
  error_reporting(E_ALL);
  session_start();
  $servername = "localhost";
  $username = "root";
  $password1 = "anktech@123";
  $dbname = "sandhya"; 
  $conn = new mysqli($servername, $username, $password1, $dbname);

   if ($conn->connect_error) 
        
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $q1="ALTER TABLE details ADD COLUMN  language text(20) AFTER gender";
    $conn->query($q1) or die ($conn->error);

  ?>
  