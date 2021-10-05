<?php
// require 'types.php';
require 'pokemon.php';
require 'Charmeleon.php';
require 'Pikachu.php';
require 'weakness.php';
require 'resistance.php';
require 'attack.php';

$pokedex = [];
$pokedex[0] = $pikachu = new Pikachu('pika');
$pokedex[1] = $charmeleon = new Charmeleon('charm');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <?php foreach ($pokedex as $PD) { ?>
    <div class="container">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="<?php echo $PD->name ?>.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title"><?php echo $PD->name ?></h4>
          <p class="card-text"><?php echo 'hp: ' . $PD->starthealth ?></p>
          <p class="card-text"><?php echo 'type: ' . $PD->type ?></p>
          <p class="card-text"><?php //echo 'attacks: ' . $PD->$attack1 ?></p>
          <p class="card-text"><?php echo 'weakness: ' . $PD->weakness->WeaknessType ?></p>
          <p class="card-text"><?php echo 'resistance: ' . $PD->resistance->ResistanceType ?></p>
        </div>
      </div>
      <br>
    </div>
  <?php }; ?>
  <?php 
    $pokedex[0]->Attack($pokedex[1], 0);
    echo "<br>";
    $pokedex[1]->Attack($pokedex[0], 0);
    echo "<br>";
    $pokedex[0]->Attack($pokedex[1], 0);
    echo "<br>"; 
    $pokedex[1]->Attack($pokedex[0], 0);
  ?>
</body>
</html>