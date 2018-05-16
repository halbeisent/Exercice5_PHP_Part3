<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Exercice 5 Partie 3 PHP</title>
  </head>
  <body>
    <?php
    // On initialise la variable $count
    $count = 0;
    while ($count <= 15) { //Tant que la valeur de $count est inférieure à 15,
      echo 'On y arrive presque <br />'; //On affiche ce message,
      $count++; //Puis on incrémente la variable
      var_dump($count); //Utilisé pour diagnostic
    }
    ?>
  </body>
</html>
