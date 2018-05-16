<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 5 Partie 3 PHP</title>
</head>
<body>
    <?php
    // Tant que la valeur de $count est inférieure ou égale à 15, on affiche le message ci-dessous:
    for ($count = 1; $count <= 15; $count++) { ?>
      <p><?= 'On y arrive presque';?></p>
    <?php } ?>
</body>
</html>
