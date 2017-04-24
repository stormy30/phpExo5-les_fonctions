<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>php5</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<?php
// Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
// Tous les paramètres doivent avoir une valeur par défaut.
$nbr1=1;
$nbr2=2;
$nbr3=3;
function somme($nbr1,$nbr2 ,$nbr3 ){
  return ($nbr1 + $nbr2 + $nbr3);
}
echo somme($nbr1,$nbr2 ,$nbr3);
 ?>


</body>
</html>
