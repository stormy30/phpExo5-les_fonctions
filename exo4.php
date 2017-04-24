<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<?php
// Faire une fonction qui prend en paramètre deux nombres.
// La fonction doit retourner :
//     Le premier nombre est plus grand si le premier
//nombre est plus grand que le deuxième
//     Le premier nombre est plus petit si le premier
//nombre est plus petit que le deuxième
//      si les deux nombres sont égaux

function comparaison($nbr1=0,$nbr2=1){
if ($nbr1> $nbr2){

  echo "Le premier nombre est plus grand";
}
else if ($nbr1<$nbr2){
  echo "le premier nombre est plus petit";
}
else{
  echo "Les deux nombres sont identiques";
}
}
comparaison();
 ?>
