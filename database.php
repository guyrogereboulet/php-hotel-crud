<?php

 include "env.php";
 // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn && $conn->connect_error) {
 echo "Errore di connessione: " . $conn->connect_error;
 die();
 }

 $sql = "SELECT * FROM `stanze`";
 $result = $conn->query($sql);
 var_dump($result);





?>
