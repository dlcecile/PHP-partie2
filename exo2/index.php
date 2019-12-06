<?php
$page = "exercice2";
include '../header.php';
?>
<p> Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.</p>
<?php
$isEasy = true;
//  if ($isEasy == true){
//    echo "C'est facile";
//  }
//  elseif ($isEasy == false) {
//    echo "C'est difficile";
//  }

 //
 if ($isEasy == true){
   echo "C'est facile";
 }
 elseif ($isEasy != true) {
   echo "C'est difficile";
 }
?>
<?php
include '../footer.php';
 ?>
