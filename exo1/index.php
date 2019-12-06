<?php
$page = "exercice1";
include '../header.php';
?>
<p>Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
<?php
$age = 24;
if ($age >= 18) {
  echo "Vous êtes majeur";
}
else {
  echo "Vous êtes mineur";
}
 ?>
 <?php
 include '../footer.php';
  ?>
