<?php
  include "server.php";
  include __DIR__ . "/../partials/header.php";
?>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <h1>Numero di stanza: <?php echo $room["room_number"] ?></h1>
              <ul>
              <li>Piano: <?php echo $room["floor"] ?></li>
              <li>Numero letti: <?php echo $room["beds"] ?></li>
              <li>Creato il: <?php echo $room["created_at"] ?></li>
              <li>Aggiornato il: <?php echo $room["updated_at"] ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<?php include __DIR__ . "/../partials/footer.php";?>
