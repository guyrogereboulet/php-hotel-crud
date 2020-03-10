<?php
 include_once __DIR__ . "/../env.php";
 include __DIR__ . "/../database.php";

 if (empty($_POST["id"])) {
   die("Id non iserito");
 }
 if (empty($_POST["beds"])) {
   die("Non hai inserito il numero di letti");
 }
 if (empty($_POST["floor"])) {
   die("Non hai inserito il piano");
 }
 if (empty($_POST["room_number"])) {
   die("Non hai inserito il piano");
 }

 $idRoom = $_POST["id"];
 $beds = $_POST["beds"];
 $floor = $_POST["floor"];
 $roomNumber = $_POST["room_number"];

 $sql = "SELECT * FROM `stanze` WHERE `id` = '$idRoom'";


 $result = $conn->query($sql);


 if ($result && $result->num_rows > 0) {
 $room = $result->fetch_assoc();
 }else {
   die ("ID non esistente");
 }


  $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW() WHERE `id` = ?";

  // $sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `beds` = $beds, `floor` = $floor WHERE `id` = $idRoom";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iiii", $roomNumber, $beds, $floor, $idRoom);
  $stmt->execute();
  // $result = $conn->query($sql);

  if ($stmt->affected_rows > 0) {
    header("Location: $basePath/show/show.php?id=$idRoom");
  } else {
    echo "KO";
  }




?>
