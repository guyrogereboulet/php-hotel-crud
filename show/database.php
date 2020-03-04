<?php

 include __DIR__. "/../env.php";
 // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn && $conn->connect_error) {
 echo "Errore di connessione: " . $conn->connect_error;
 die();
 }
