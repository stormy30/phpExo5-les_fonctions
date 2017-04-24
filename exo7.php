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
// Faire une fonction qui prend deux paramètres : age et genre.
// Le paramètre genre peut prendre comme valeur :
//     Homme
//     Femme
// La fonction doit renvoyer en fonction des paramètres :
//
//     Vous êtes un homme et vous êtes majeur
//     Vous êtes un homme et vous êtes mineur
//     Vous êtes une femme et vous êtes majeur
//     Vous êtes une femme et vous êtes mineur
// Gérer tous les cas.
function identite($genre, $age){

  if($genre=="homme" && $age>=18){
  return "vous etes un homme et vous etes majeur";
}
elseif($genre=="homme" && $age<18){
  return "vous etes un homme et vous etes mineur";
}
elseif($genre=="femme" && $age>=18){
  return "vous etes une femme et vous etes majeure";
}
else{
  return "vous etes une femme et vous etes mineure";
}
}
echo identite("femme", 29);
?>
</body>
</html>
