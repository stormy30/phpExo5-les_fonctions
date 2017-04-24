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
// Faire une fonction qui prend trois paramètres : nom, prenom et age.
// Elle doit renvoyer une chaine de la forme :
// "Bonjour" + nom + prenom + ",tu as" + age + "ans"
function identite($nom = "veronique ", $prenom= "stormy30",$age=18){
  return "Bonjour"." ".$nom. $prenom . "". ",tu as".$age." "." ans.";
}
// echo identite(); Attention on nous demande de renvoyer retourner la fonction
//et pas de l'afficher!
 ?>


</body>
</html>
