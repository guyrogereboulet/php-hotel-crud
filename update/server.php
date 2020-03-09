<?php
 include_once __DIR__ . "/../env.php";
 include __DIR__ . "/../database.php";

 if (empty($_post[id])) {
   die("Id non iserito");
 }

  $sql = "UPDATE `stanze`
  SET `room_number` = , `beds` = , `floor` =
  WHERE `id` = ";




?>
