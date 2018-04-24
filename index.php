<?php include_once 'classes/Flat.php';

?>
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $flats[0]=new Flat(65, 3);
    $flats[1]=new Flat(600, 15);
    $flats[2]=new Flat(655, 16);
    function printFlats($flats)
    {
        for ($i=0; $i < count($flats) ; $i++) {
            echo "Velikost mého nového bytu " . $flats[$i]->getSize() . " A má místností: " .  $flats[$i]->getRoom() . "<br>";
        }
    }
    printFlats($flats);
    for ($i=0; $i <count($flats) ; $i++) {
        $flats[$i]->rebuild($flats[$i]->getSize() + 5, $flats[$i]->getRoom() + 3);
    }
    printFlats($flats);

     ?>
  </body>
</html>
