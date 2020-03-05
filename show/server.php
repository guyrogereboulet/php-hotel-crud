<?php
include __DIR__. "/../database.php";

if(empty($_GET["id"])) {
  die("ID non è esistente");
}

$idRoom = $_GET["id"];
$sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
$room = $result->fetch_assoc();
// var_dump($room);
}
elseif ($result) {
  echo "No results";
}
else {
  echo "Query error";
}



$conn->close();


?>
