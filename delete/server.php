<?php
 include __DIR__ ."/../database.php";


 if(empty($_POST["id"])) {
   die("ID non corretto");
 }

 $idRoom = $_POST["id"];


//Controlliamo che l'ID esista
 $sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
 $result = $conn->query($sql);

 if ($result && $result->num_rows == 0) {
 $room = $result->fetch_assoc();
 die("Id non è corretto");
 }


//se esiste facciamo il DELETE
 $sql = "DELETE FROM `stanze` WHERE `id` = $idRoom";

 $result = $conn->query($sql);
 var_dump($result);


 if ($result) {
   // echo "OK";

   //Reindirizzo la cancellazione dell'item sulla pagina principale
   header("Location: $basePath?roomNumber=$idRoom");
 }
 else {
   echo "K0";
 }


 $conn->close();
?>
